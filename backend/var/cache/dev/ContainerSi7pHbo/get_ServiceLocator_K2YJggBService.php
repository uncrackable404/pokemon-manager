<?php

namespace ContainerSi7pHbo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K2YJggBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k2YJggB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k2YJggB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pokemon' => ['privates', '.errored..service_locator.k2YJggB.App\\Entity\\Pokemon', NULL, 'Cannot autowire service ".service_locator.k2YJggB": it references class "App\\Entity\\Pokemon" but no such service exists.'],
            'team' => ['privates', '.errored..service_locator.k2YJggB.App\\Entity\\Team', NULL, 'Cannot autowire service ".service_locator.k2YJggB": it references class "App\\Entity\\Team" but no such service exists.'],
        ], [
            'pokemon' => 'App\\Entity\\Pokemon',
            'team' => 'App\\Entity\\Team',
        ]);
    }
}