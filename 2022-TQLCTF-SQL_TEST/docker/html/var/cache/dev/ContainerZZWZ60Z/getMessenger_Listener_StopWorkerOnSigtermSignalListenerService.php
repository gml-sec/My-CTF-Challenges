<?php

namespace ContainerZZWZ60Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_StopWorkerOnSigtermSignalListenerService extends App_KernelDevContainer
{
    /*
     * Gets the private 'messenger.listener.stop_worker_on_sigterm_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnSigtermSignalListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.listener.stop_worker_on_sigterm_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnSigtermSignalListener(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
