<?php
/**
 * Setup routes with a single request method:
 *
 * $app->get('/', App\Action\HomePageAction::class, 'home');
 * $app->post('/album', App\Action\AlbumCreateAction::class, 'album.create');
 * $app->put('/album/:id', App\Action\AlbumUpdateAction::class, 'album.put');
 * $app->patch('/album/:id', App\Action\AlbumUpdateAction::class, 'album.patch');
 * $app->delete('/album/:id', App\Action\AlbumDeleteAction::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $app->route('/contact', App\Action\ContactAction::class, ['GET', 'POST', ...], 'contact');
 *
 * Or handling all request methods:
 *
 * $app->route('/contact', App\Action\ContactAction::class)->setName('contact');
 *
 * or:
 *
 * $app->route(
 *     '/contact',
 *     App\Action\ContactAction::class,
 *     Zend\Expressive\Router\Route::HTTP_METHOD_ANY,
 *     'contact'
 * );
 */

/** @var \Zend\Expressive\Application $app */

$app->get('/', App\Action\HomePageAction::class, 'home');
//$app->get('/api/ping', App\Action\PingAction::class, 'api.ping');
$app->get('/historico-envio', App\Action\HistoricoEnvioAction::class, 'api.historicoenvioaction');
$app->get('/login', App\Action\LoginAction::class, 'api.loginaction');
$app->get('/minha-conta', App\Action\MinhaContaAction::class, 'api.minhacontaaction');
$app->get('/novo-login', App\Action\NovoLoginAction::class, 'api.novologinaction');
$app->get('/planos', App\Action\PlanosAction::class, 'api.planosaction');
$app->get('/templates', App\Action\TemplatesAction::class, 'api.templatesaction');
