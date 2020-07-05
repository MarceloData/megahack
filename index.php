<?php

require "./vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(ROOT);

$route->namespace("\src\app");

$route->group(null);
$route->get("/", "Web:home");
$route->get("/contato", "Web:contato");
$route->get("/admin", "Web:admin");
$route->get("/novolojista", "Web:novolojista");
$route->get("/novousuario", "Web:novousuario");
$route->get("/usuarios", "Web:usuarios");
$route->get("/formseguranca", "Web:formseguranca");

$route->group("ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if ($route->error()) {
    echo "<h1>Erro {$route->error()}</h1>";
}