<?php

namespace ContainerR2ZfVqF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7bfy_9xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7bfy.9x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7bfy.9x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccountPasswordController::index' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.xYZTOMA', 'get_ServiceLocator_XYZTOMAService', true],
            'App\\Controller\\AdminController::edit' => ['privates', '.service_locator.xYZTOMA', 'get_ServiceLocator_XYZTOMAService', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\AdminController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\AdminController::show' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController::delete' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController::sub' => ['privates', '.service_locator.Uh7GIHF', 'get_ServiceLocator_Uh7GIHFService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\OrderController::add' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\OrderController::index' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\OrderSuccessController::index' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.PXMCmnG', 'get_ServiceLocator_PXMCmnGService', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\PostController::showOnePremium' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\PostController::showPremium' => ['privates', '.service_locator.PXMCmnG', 'get_ServiceLocator_PXMCmnGService', true],
            'App\\Controller\\RegisterController::index' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\ResetPasswordController::update' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\StripeController::index' => ['privates', '.service_locator.FN2.G6a', 'get_ServiceLocator_FN2_G6aService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AccountPasswordController:index' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.xYZTOMA', 'get_ServiceLocator_XYZTOMAService', true],
            'App\\Controller\\AdminController:edit' => ['privates', '.service_locator.xYZTOMA', 'get_ServiceLocator_XYZTOMAService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\AdminController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\AdminController:show' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController:delete' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\CartController:sub' => ['privates', '.service_locator.Uh7GIHF', 'get_ServiceLocator_Uh7GIHFService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\OrderController:add' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\OrderController:index' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\OrderSuccessController:index' => ['privates', '.service_locator.4N2tuNN', 'get_ServiceLocator_4N2tuNNService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.PXMCmnG', 'get_ServiceLocator_PXMCmnGService', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\PostController:showOnePremium' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\PostController:showPremium' => ['privates', '.service_locator.PXMCmnG', 'get_ServiceLocator_PXMCmnGService', true],
            'App\\Controller\\RegisterController:index' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\ResetPasswordController:update' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\StripeController:index' => ['privates', '.service_locator.FN2.G6a', 'get_ServiceLocator_FN2_G6aService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AccountPasswordController::index' => '?',
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::edit' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AdminController::new' => '?',
            'App\\Controller\\AdminController::show' => '?',
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::delete' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CartController::sub' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\OrderController::add' => '?',
            'App\\Controller\\OrderController::index' => '?',
            'App\\Controller\\OrderSuccessController::index' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Controller\\PostController::showOnePremium' => '?',
            'App\\Controller\\PostController::showPremium' => '?',
            'App\\Controller\\RegisterController::index' => '?',
            'App\\Controller\\ResetPasswordController::update' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StripeController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AccountPasswordController:index' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:edit' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AdminController:new' => '?',
            'App\\Controller\\AdminController:show' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:delete' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CartController:sub' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\OrderController:add' => '?',
            'App\\Controller\\OrderController:index' => '?',
            'App\\Controller\\OrderSuccessController:index' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:show' => '?',
            'App\\Controller\\PostController:showOnePremium' => '?',
            'App\\Controller\\PostController:showPremium' => '?',
            'App\\Controller\\RegisterController:index' => '?',
            'App\\Controller\\ResetPasswordController:update' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StripeController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
