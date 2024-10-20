<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

use App\Controllers\AuthController;
use App\Controllers\UserController;

$router = new RouteCollector;
$router -> post('/php-game/register', [AuthController::class, 'register']);
$router -> post('/php-game/signIn', [AuthController::class, 'signIn']);

$router -> get('/php-game', [UserController::class, 'all']);

$dispatch = new Dispatcher($router->getData());
echo $dispatch->dispatch(
    $_SERVER["REQUEST_METHOD"],
    parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)
);

?>