<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\DataCollector;

use Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener;
use Symfony\Bundle\SecurityBundle\Security\FirewallMap;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\SwitchUserToken;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager;
use Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;
use Symfony\Component\Security\Http\Firewall\SwitchUserListener;
use Symfony\Component\Security\Http\FirewallMapInterface;
use Symfony\Component\Security\Http\Logout\LogoutUrlGenerator;
use Symfony\Component\VarDumper\Caster\ClassStub;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SecurityDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private $tokenStorage;
    private $roleHierarchy;
    private $logoutUrlGenerator;
    private $accessDecisionManager;
    private $firewallMap;
    private $firewall;
    private $hasVarDumper;
    private $authenticatorManagerEnabled;

    public function __construct(TokenStorageInterface $tokenStorage = null, RoleHierarchyInterface $roleHierarchy = null, LogoutUrlGenerator $logoutUrlGenerator = null, AccessDecisionManagerInterface $accessDecisionManager = null, FirewallMapInterface $firewallMap = null, TraceableFirewallListener $firewall = null, bool $authenticatorManagerEnabled = false)
    {
        if (!$authenticatorManagerEnabled) {
            trigger_deprecation('symfony/security-bundle', '5.4', 'Setting the $authenticatorManagerEnabled argument of "%s" to "false" is deprecated, use the new authenticator system instead.', __METHOD__);
        }

        $this->tokenStorage = $tokenStorage;
        $this->roleHierarchy = $roleHierarchy;
        $this->logoutUrlGenerator = $logoutUrlGenerator;
        $this->accessDecisionManager = $accessDecisionManager;
        $this->firewallMap = $firewallMap;
        $this->firewall = $firewall;
        $this->hasVarDumper = class_exists(ClassStub::class);
        $this->authenticatorManagerEnabled = $authenticatorManagerEnabled;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        if (null === $this->tokenStorage) {
            $this->data = [
                'enabled' => false,
                'authenticated' => false,
                'impersonated' => false,
                'impersonator_user' => null,
                'impersonation_exit_path' => null,
                'token' => null,
                'token_class' => null,
                'logout_url' => null,
                'user' => '',
                'roles' => [],
                'inherited_roles' => [],
                'supports_role_hierarchy' => null !== $this->roleHierarchy,
            ];
        } elseif (null === $token = $this->tokenStorage->getToken()) {
            $this->data = [
                'enabled' => true,
                'authenticated' => false,
                'impersonated' => false,
                'impersonator_user' => null,
                'impersonation_exit_path' => null,
                'token' => null,
                'token_class' => null,
                'logout_url' => null,
                'user' => '',
                'roles' => [],
                'inherited_roles' => [],
                'supports_role_hierarchy' => null !== $this->roleHierarchy,
            ];
        } else {
            $inheritedRoles = [];
            $assignedRoles = $token->getRoleNames();

            $impersonatorUser = null;
            if ($token instanceof SwitchUserToken) {
                $originalToken = $token->getOriginalToken();
                // @deprecated since Symfony 5.3, change to $originalToken->getUserIdentifier() in 6.0
                $impersonatorUser = method_exists($originalToken, 'getUserIdentifier') ? $originalToken->getUserIdentifier() : $originalToken->getUsername();
            }

            if (null !== $this->roleHierarchy) {
                foreach ($this->roleHierarchy->getReachableRoleNames($assignedRoles) as $role) {
                    if (!\in_array($role, $assignedRoles, true)) {
                        $inheritedRoles[] = $role;
                    }
                }
            }

            $logoutUrl = null;
            try {
                if (null !== $this->logoutUrlGenerator && !$token instanceof AnonymousToken) {
                    $logoutUrl = $this->logoutUrlGenerator->getLogoutPath();
                }
            } catch (\Exception $e) {
                // fail silently when the logout URL cannot be generated
            }

            $this->data = [
                'enabled' => true,
                'authenticated' => method_exists($token, 'isAuthenticated') ? $token->isAuthenticated(false) : (bool) $token->getUser(),
                'impersonated' => null !== $impersonatorUser,
                'impersonator_user' => $impersonatorUser,
                'impersonation_exit_path' => null,
                'token' => $token,
                'token_class' => $this->hasVarDumper ? new ClassStub(\get_class($token)) : \get_class($token),
                'logout_url' => $logoutUrl,
                // @deprecated since Symfony 5.3, change to $token->getUserIdentifier() in 6.0
                'user' => method_exists($token, 'getUserIdentifier') ? $token->getUserIdentifier() : $token->getUsername(),
                'roles' => $assignedRoles,
                'inherited_roles' => array_unique($inheritedRoles),
                'supports_role_hierarchy' => null !== $this->roleHierarchy,
            ];
        }

        // collect voters and access decision manager information
        if ($this->accessDecisionManager instanceof TraceableAccessDecisionManager) {
            $this->data['voter_strategy'] = $this->accessDecisionManager->getStrategy();

            foreach ($this->accessDecisionManager->getVoters() as $voter) {
                if ($voter instanceof TraceableVoter) {
                    $voter = $voter->getDecoratedVoter();
                }

                $this->data['voters'][] = $this->hasVarDumper ? new ClassStub(\get_class($voter)) : \get_class($voter);
            }

            // collect voter details
            $decisionLog = $this->accessDecisionManager->getDecisionLog();
            foreach ($decisionLog as $key => $log) {
                $decisionLog[$key]['voter_details'] = [];
                foreach ($log['voterDetails'] as $voterDetail) {
                    $voterClass = \get_class($voterDetail['voter']);
                    $classData = $this->hasVarDumper ? new ClassStub($voterClass) : $voterClass;
                    $decisionLog[$key]['voter_details'][] = [
                        'class' => $classData,
                        'attributes' => $voterDetail['attributes'], // Only displayed for unanimous strategy
                        'vote' => $voterDetail['vote'],
                    ];
                }
                unset($decisionLog[$key]['voterDetails']);
            }

            $this->data['access_decision_log'] = $decisionLog;
        } else {
            $this->data['access_decision_log'] = [];
            $this->data['voter_strategy'] = 'unknown';
            $this->data['voters'] = [];
        }

        // collect firewall context information
        $this->data['firewall'] = null;
        if ($this->firewallMap instanceof FirewallMap) {
            $firewallConfig = $this->firewallMap->getFirewallConfig($request);
            if (null !== $firewallConfig) {
                $this->data['firewall'] = [
                    'name' => $firewallConfig->getName(),
                    'allows_anonymous' => $this->authenticatorManagerEnabled ? false : $firewallConfig->allowsAnonymous(),
                    'request_matcher' => $firewallConfig->getRequestMatcher(),
                    'security_enabled' => $firewallConfig->isSecurityEnabled(),
                    'stateless' => $firewallConfig->isStateless(),
                    'provider' => $firewallConfig->getProvider(),
                    'context' => $firewallConfig->getContext(),
                    'entry_point' => $firewallConfig->getEntryPoint(),
                    'access_denied_handler' => $firewallConfig->getAccessDeniedHandler(),
                    'access_denied_url' => $firewallConfig->getAccessDeniedUrl(),
                    'user_checker' => $firewallConfig->getUserChecker(),
                ];

                // in 6.0, always fill `$this->data['authenticators'] only
                if ($this->authenticatorManagerEnabled) {
                    $this->data['firewall']['authenticators'] = $firewallConfig->getAuthenticators();
                } else {
                    $this->data['firewall']['listeners'] = $firewallConfig->getAuthenticators();
                }

                // generate exit impersonation path from current request
                if ($this->data['impersonated'] && null !== $switchUserConfig = $firewallConfig->getSwitchUser()) {
                    $exitPath = $request->getRequestUri();
                    $exitPath .= null === $request->getQueryString() ? '?' : '&';
                    $exitPath .= sprintf('%s=%s', urlencode($switchUserConfig['parameter']), SwitchUserListener::EXIT_VALUE);

                    $this->data['impersonation_exit_path'] = $exitPath;
                }
            }
        }

        // collect firewall listeners information
        $this->data['listeners'] = [];
        if ($this->firewall) {
            $this->data['listeners'] = $this->firewall->getWrappedListeners();
        }

        $this->data['authenticator_manager_enabled'] = $this->authenticatorManagerEnabled;
        $this->data['authenticators'] = $this->firewall ? $this->firewall->getAuthenticatorsInfo() : [];
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        $this->data = [];
    }

    public function lateCollect()
    {
        $this->data = $this->cloneVar($this->data);
    }

    /**
     * Checks if security is enabled.
     */
    public function isEnabled(): bool
    {
        return $this->data['enabled'];
    }

    /**
     * Gets the user.
     */
    public function getUser(): string
    {
        return $this->data['user'];
    }

    /**
     * Gets the roles of the user.
     *
     * @return array|Data
     */
    public function getRoles()
    {
        return $this->data['roles'];
    }

    /**
     * Gets the inherited roles of the user.
     *
     * @return array|Data
     */
    public function getInheritedRoles()
    {
        return $this->data['inherited_roles'];
    }

    /**
     * Checks if the data contains information about inherited roles. Still the inherited
     * roles can be an empty array.
     */
    public function supportsRoleHierarchy(): bool
    {
        return $this->data['supports_role_hierarchy'];
    }

    /**
     * Checks if the user is authenticated or not.
     */
    public function isAuthenticated(): bool
    {
        return $this->data['authenticated'];
    }

    public function isImpersonated(): bool
    {
        return $this->data['impersonated'];
    }

    public function getImpersonatorUser(): ?string
    {
        return $this->data['impersonator_user'];
    }

    public function getImpersonationExitPath(): ?string
    {
        return $this->data['impersonation_exit_path'];
    }

    /**
     * Get the class name of the security token.
     *
     * @return string|Data|null
     */
    public function getTokenClass()
    {
        return $this->data['token_class'];
    }

    /**
     * Get the full security token class as Data object.
     */
    public function getToken(): ?Data
    {
        return $this->data['token'];
    }

    /**
     * Get the logout URL.
     */
    public function getLogoutUrl(): ?string
    {
        return $this->data['logout_url'];
    }

    /**
     * Returns the FQCN of the security voters enabled in the application.
     *
     * @return string[]|Data
     */
    public function getVoters()
    {
        return $this->data['voters'];
    }

    /**
     * Returns the strategy configured for the security voters.
     */
    public function getVoterStrategy(): string
    {
        return $this->data['voter_strategy'];
    }

    /**
     * Returns the log of the security decisions made by the access decision manager.
     *
     * @return array|Data
     */
    public function getAccessDecisionLog()
    {
        return $this->data['access_decision_log'];
    }

    /**
     * Returns the configuration of the current firewall context.
     *
     * @return array|Data|null
     */
    public function getFirewall()
    {
        return $this->data['firewall'];
    }

    /**
     * @return array|Data
     */
    public function getListeners()
    {
        return $this->data['listeners'];
    }

    /**
     * @return array|Data
     */
    public function getAuthenticators()
    {
        return $this->data['authenticators'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'security';
    }

    public function isAuthenticatorManagerEnabled(): bool
    {
        return $this->data['authenticator_manager_enabled'];
    }
}
