<?php

namespace ContainerCkSzYSv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Dumper_ResService extends App_KernelTestContainer
{
    /*
     * Gets the private 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
}
