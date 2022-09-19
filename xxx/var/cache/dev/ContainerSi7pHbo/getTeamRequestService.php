<?php

namespace ContainerSi7pHbo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeamRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Request\TeamRequest' shared autowired service.
     *
     * @return \App\Request\TeamRequest
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/digitalrevolution/symfony-request-validation/src/AbstractValidatedRequest.php';
        include_once \dirname(__DIR__, 4).'/src/Request/TeamRequest.php';
        include_once \dirname(__DIR__, 4).'/vendor/digitalrevolution/symfony-request-validation/src/Constraint/RequestConstraintFactory.php';

        return $container->privates['App\\Request\\TeamRequest'] = new \App\Request\TeamRequest(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['validator'] ?? $container->load('getValidatorService')), new \DigitalRevolution\SymfonyRequestValidation\Constraint\RequestConstraintFactory());
    }
}
