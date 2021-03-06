<?php

namespace ContainerCkSzYSv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_CacheClassMetadataFactoryService extends App_KernelTestContainer
{
    /*
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(($container->privates['serializer.mapping.cache_class_metadata_factory.inner'] ?? $container->load('getSerializer_Mapping_CacheClassMetadataFactory_InnerService')), ($container->privates['serializer.mapping.cache.symfony'] ?? $container->load('getSerializer_Mapping_Cache_SymfonyService')));
    }
}
