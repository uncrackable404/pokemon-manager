<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXrn383a\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXrn383a/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXrn383a.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXrn383a\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXrn383a\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xrn383a',
    'container.build_id' => '3d72527b',
    'container.build_time' => 1663713684,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXrn383a');
