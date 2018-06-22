<?php
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 22/06/2018
 * Time: 14:15
 */

namespace App\Action\Factories;

use App\Action\PlanosAction;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class PlanosActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new PlanosAction($router, $template);
    }
}
