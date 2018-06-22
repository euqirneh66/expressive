<?php
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 22/06/2018
 * Time: 14:16
 */

namespace App\Action\Factories;


use App\Action\HistoricoEnvioAction;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class HistoricoEnvioActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new HistoricoEnvioAction($router, $template);
    }
}
