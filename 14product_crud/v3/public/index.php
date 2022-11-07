<?php 


require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\ProductController;


$router = new Router();

/* non-static method cannot be called statically */
/* 
$router->get('/', [ProductController::class, 'index']);
$router->get('/products', [ProductController::class, 'index']);
$router->get('/products/create', [ProductController::class, 'create']);
$router->post('/products/create', [ProductController::class, 'create']);
$router->get('/products/update', [ProductController::class, 'update']);
$router->post('/products/update', [ProductController::class, 'update']);
$router->post('/products/delete', [ProductController::class, 'delete']);
 */
  
 #changed to this 

$router->get('/', [new ProductController(), 'index']);
$router->get('/products', [new ProductController(), 'index']);
$router->get('/products/create', [new ProductController(), 'create']);
$router->post('/products/create', [new ProductController(), 'create']);
$router->get('/products/update', [new ProductController(), 'update']);
$router->post('/products/update', [new ProductController(), 'update']);
$router->post('/products/delete', [new ProductController(), 'delete']);





$router->resolve();











 
?>