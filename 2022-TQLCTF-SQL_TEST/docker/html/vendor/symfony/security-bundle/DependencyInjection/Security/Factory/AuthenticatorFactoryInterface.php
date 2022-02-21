<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @method int getPriority() defines the position at which the authenticator is called
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
interface AuthenticatorFactoryInterface
{
    /**
     * Creates the authenticator service(s) for the provided configuration.
     *
     * @return string|string[] The authenticator service ID(s) to be used by the firewall
     */
    public function createAuthenticator(ContainerBuilder $container, string $firewallName, array $config, string $userProviderId);

    /**
     * Defines the configuration key used to reference the authenticator
     * in the firewall configuration.
     *
     * @return string
     */
    public function getKey();

    public function addConfiguration(NodeDefinition $builder);
}
