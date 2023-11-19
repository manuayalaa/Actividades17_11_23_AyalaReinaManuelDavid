<?php
require('../app/Config/config.php');
require('../vendor/autoload.php');

use App\Core\Router;
use App\Controllers\IndexController;
use App\Controllers\NumerosController;
use App\Controllers\DNIController;
use App\Controllers\FactorizarController;
use App\Controllers\UsuariosController;



$router = new Router();

$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'IndexAction']
));
$router->add(array(
    'name' => 'home',
    'path' => '/^\/saluda\/[A-z]+$/',
    'action' => [IndexController::class, 'SaludaAction']
));
$router->add(array(
    'name' => 'home',
    'path' => '/^\/numeros\/$/',
    'action' => [NumerosController::class, 'NumerosAction']
));
$router->add(array(
    'name' => 'home',
    'path' => '/^\/cantidadnumeros\/[0-9]+$/',
    'action' => [NumerosController::class, 'NumeroscantidadAction']
));
$router->add(array(
    'name' => 'home',
    'path' => '/^\/calculaletra\?dni=[0-9]+$/',
    'action' => [DNIController::class, 'DniAction']
));
$router->add(array(
    'name' => 'home',
    'path' => '/^\/factorizar\/[0-9]+$/',
    'action' => [FactorizarController::class, 'FactorizarAction']
));
$router->add(array(
    'name' => 'home',
    'path' => '/^\/usuarios\/$/',
    'action' => [UsuariosController::class, 'UsuariosAction']
));
$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
$route = $router->match($request);


if ($router) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo 'error';
}
