<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOd5ZC1Q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOd5ZC1Q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOd5ZC1Q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOd5ZC1Q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOd5ZC1Q\App_KernelDevDebugContainer([
    'container.build_hash' => 'Od5ZC1Q',
    'container.build_id' => 'a5b38e58',
    'container.build_time' => 1700837546,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOd5ZC1Q');
