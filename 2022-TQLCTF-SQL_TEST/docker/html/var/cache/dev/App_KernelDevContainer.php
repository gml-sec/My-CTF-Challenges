<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZZWZ60Z\App_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZZWZ60Z/App_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerZZWZ60Z.legacy');

    return;
}

if (!\class_exists(App_KernelDevContainer::class, false)) {
    \class_alias(\ContainerZZWZ60Z\App_KernelDevContainer::class, App_KernelDevContainer::class, false);
}

return new \ContainerZZWZ60Z\App_KernelDevContainer([
    'container.build_hash' => 'ZZWZ60Z',
    'container.build_id' => '5ce69c5b',
    'container.build_time' => 1642689420,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZZWZ60Z');