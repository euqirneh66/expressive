<?php

namespace App;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'invokables' => [
            ],
            'factories'  => [
                Action\HistoricoEnvioAction::class => Action\Factories\HistoricoEnvioActionFactory::class,
                Action\HomePageAction::class => Action\Factories\HomePageFactory::class,
                Action\LoginAction::class => Action\Factories\LoginActionFactory::class,
                Action\MinhaContaAction::class => Action\Factories\MinhaContaActionFactory::class,
                Action\NovoLoginAction::class => Action\Factories\NovoLoginActionFactory::class,
                Action\PlanosAction::class => Action\Factories\PlanosActionFactory::class,
                Action\TemplatesAction::class => Action\Factories\TemplatesActionFactory::class,
            ],
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return array
     */
    public function getTemplates()
    {
        return [
            'paths' => [
                'app'    => ['templates/app'],
                'error'  => ['templates/error'],
                'layout' => ['templates/layout'],
            ],
        ];
    }
}
