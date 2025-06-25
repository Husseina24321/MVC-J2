<?php
require"config/autoload.php";
$route = $_GET['route'] ?? 'default';
$router = new Router();
$router->handleRequest($route);
