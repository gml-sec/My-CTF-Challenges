<?php

namespace ContainerCkSzYSv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_Redis_FactoryService extends App_KernelTestContainer
{
    /*
     * Gets the private 'messenger.transport.redis.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Bridge\Redis\Transport\RedisTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.transport.redis.factory'] = new \Symfony\Component\Messenger\Bridge\Redis\Transport\RedisTransportFactory();
    }
}