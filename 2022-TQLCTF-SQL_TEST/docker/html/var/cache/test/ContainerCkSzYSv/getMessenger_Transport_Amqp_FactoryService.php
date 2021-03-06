<?php

namespace ContainerCkSzYSv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_Amqp_FactoryService extends App_KernelTestContainer
{
    /*
     * Gets the private 'messenger.transport.amqp.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.transport.amqp.factory'] = new \Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory();
    }
}
