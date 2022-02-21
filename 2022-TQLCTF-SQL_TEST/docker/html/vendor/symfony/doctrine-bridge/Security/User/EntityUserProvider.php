<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Security\User;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Wrapper around a Doctrine ObjectManager.
 *
 * Provides provisioning for Doctrine entity users.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EntityUserProvider implements UserProviderInterface, PasswordUpgraderInterface
{
    private $registry;
    private $managerName;
    private $classOrAlias;
    private $class;
    private $property;

    public function __construct(ManagerRegistry $registry, string $classOrAlias, string $property = null, string $managerName = null)
    {
        $this->registry = $registry;
        $this->managerName = $managerName;
        $this->classOrAlias = $classOrAlias;
        $this->property = $property;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername(string $username)
    {
        trigger_deprecation('symfony/doctrine-bridge', '5.3', 'Method "%s()" is deprecated, use loadUserByIdentifier() instead.', __METHOD__);

        return $this->loadUserByIdentifier($username);
    }

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        $repository = $this->getRepository();
        if (null !== $this->property) {
            $user = $repository->findOneBy([$this->property => $identifier]);
        } else {
            if (!$repository instanceof UserLoaderInterface) {
                throw new \InvalidArgumentException(sprintf('You must either make the "%s" entity Doctrine Repository ("%s") implement "Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface" or set the "property" option in the corresponding entity provider configuration.', $this->classOrAlias, get_debug_type($repository)));
            }

            // @deprecated since Symfony 5.3, change to $repository->loadUserByIdentifier() in 6.0
            if (method_exists($repository, 'loadUserByIdentifier')) {
                $user = $repository->loadUserByIdentifier($identifier);
            } else {
                trigger_deprecation('symfony/doctrine-bridge', '5.3', 'Not implementing method "loadUserByIdentifier()" in user loader "%s" is deprecated. This method will replace "loadUserByUsername()" in Symfony 6.0.', get_debug_type($repository));

                $user = $repository->loadUserByUsername($identifier);
            }
        }

        if (null === $user) {
            $e = new UserNotFoundException(sprintf('User "%s" not found.', $identifier));
            $e->setUserIdentifier($identifier);

            throw $e;
        }

        return $user;
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        $class = $this->getClass();
        if (!$user instanceof $class) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_debug_type($user)));
        }

        $repository = $this->getRepository();
        if ($repository instanceof UserProviderInterface) {
            $refreshedUser = $repository->refreshUser($user);
        } else {
            // The user must be reloaded via the primary key as all other data
            // might have changed without proper persistence in the database.
            // That's the case when the user has been changed by a form with
            // validation errors.
            if (!$id = $this->getClassMetadata()->getIdentifierValues($user)) {
                throw new \InvalidArgumentException('You cannot refresh a user from the EntityUserProvider that does not contain an identifier. The user object has to be serialized with its own identifier mapped by Doctrine.');
            }

            $refreshedUser = $repository->find($id);
            if (null === $refreshedUser) {
                $e = new UserNotFoundException('User with id '.json_encode($id).' not found.');
                $e->setUserIdentifier(json_encode($id));

                throw $e;
            }
        }

        return $refreshedUser;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass(string $class)
    {
        return $class === $this->getClass() || is_subclass_of($class, $this->getClass());
    }

    /**
     * {@inheritdoc}
     *
     * @final
     */
    public function upgradePassword($user, string $newHashedPassword): void
    {
        if (!$user instanceof PasswordAuthenticatedUserInterface) {
            trigger_deprecation('symfony/doctrine-bridge', '5.3', 'The "%s::upgradePassword()" method expects an instance of "%s" as first argument, the "%s" class should implement it.', PasswordUpgraderInterface::class, PasswordAuthenticatedUserInterface::class, get_debug_type($user));

            if (!$user instanceof UserInterface) {
                throw new \TypeError(sprintf('The "%s()" method expects an instance of "%s" as first argument, "%s" given.', __METHOD__, PasswordAuthenticatedUserInterface::class, get_debug_type($user)));
            }
        }

        $class = $this->getClass();
        if (!$user instanceof $class) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_debug_type($user)));
        }

        $repository = $this->getRepository();
        if ($repository instanceof PasswordUpgraderInterface) {
            $repository->upgradePassword($user, $newHashedPassword);
        }
    }

    private function getObjectManager(): ObjectManager
    {
        return $this->registry->getManager($this->managerName);
    }

    private function getRepository(): ObjectRepository
    {
        return $this->getObjectManager()->getRepository($this->classOrAlias);
    }

    private function getClass(): string
    {
        if (null === $this->class) {
            $class = $this->classOrAlias;

            if (str_contains($class, ':')) {
                $class = $this->getClassMetadata()->getName();
            }

            $this->class = $class;
        }

        return $this->class;
    }

    private function getClassMetadata(): ClassMetadata
    {
        return $this->getObjectManager()->getClassMetadata($this->classOrAlias);
    }
}
