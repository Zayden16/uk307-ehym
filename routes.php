<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/LoginController.php',
    'login' => 'app/Controllers/LoginController.php',
    'mainmenu' => 'app/Controllers/MainMenuController.php'
]);