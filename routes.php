<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/LoginController.php',
    'mainmenu' => 'app/Controllers/MainMenuController.php',
    'createorder' => 'app/Controllers/CreateOrderController.php',
    'activeorders' => 'app/Controllers/ActiveOrdersController.php'
]);