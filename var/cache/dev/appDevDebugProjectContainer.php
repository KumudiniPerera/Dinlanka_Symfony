<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZwwwlxx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZwwwlxx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZwwwlxx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZwwwlxx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZwwwlxx\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Zwwwlxx',
    'container.build_id' => '8c1e4de1',
    'container.build_time' => 1523431376,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerZwwwlxx');
