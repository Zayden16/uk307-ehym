<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/LoginController.php',
    'mainmenu' => 'app/Controllers/MainMenuController.php',
    'createorder' => 'app/Controllers/CreateOrderController.php',
    'orders' => 'app/Controllers/OrdersController.php',
    'addresses' => 'app/Controllers/CreateAddressController.php',
    'editorder' => 'app/Controllers/EditOrderController.php'
]);