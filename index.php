<?php
declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require "./Core/router/router.php";

$router = new Router;

$router->add("/", function(){echo "homepage";});

$router->add("/aboutme", function(){echo "about me";});
$router->add("/user/{id}", function($id){echo "test yser $id";});

$router->dispatch($path);