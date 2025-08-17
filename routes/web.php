<?php

use App\Controllers\PostController;
use App\Core\Router;


$router=new Router();

$router->get('/blog-mvc/public/posts',[PostController::class,'index']);

$router->get('/blog-mvc/public/posts/create',[PostController::class,'create']);

$router->post('/blog-mvc/public/posts',[BookController::class,'store']);
