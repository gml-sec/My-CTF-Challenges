<?php

namespace ContainerCkSzYSv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderFactory_NullService extends App_KernelTestContainer
{
    /*
     * Gets the private 'translation.provider_factory.null' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\NullProviderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.provider_factory.null'] = new \Symfony\Component\Translation\Provider\NullProviderFactory();
    }
}