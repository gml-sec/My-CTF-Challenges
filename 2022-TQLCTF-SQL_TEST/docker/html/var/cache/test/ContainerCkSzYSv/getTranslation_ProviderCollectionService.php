<?php

namespace ContainerCkSzYSv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderCollectionService extends App_KernelTestContainer
{
    /*
     * Gets the private 'translation.provider_collection' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\TranslationProviderCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.provider_collection'] = ($container->privates['translation.provider_collection_factory'] ?? $container->load('getTranslation_ProviderCollectionFactoryService'))->fromConfig([]);
    }
}
