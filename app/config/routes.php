<?php

use App\Controllers\AuthController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

$app = Flight::app();
$router = Flight::router();

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	$router->get('/', function() use ($app) {
		$app->redirect("/login");
	});

	$router->get('/login', function() use ($app) {
		$app->render('login');
	});

	$router->post('/login', [AuthController::class, "login"]);


	
}, [ SecurityHeadersMiddleware::class ]);