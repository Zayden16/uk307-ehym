<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
require 'app/Models/status.php';
require 'app/Models/importance.php';
require 'app/Models/order.php';

$stati = status::getAll();
$importan = importance::getAll();
$tools = tool::getAll();
$adr = address::getAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $o= new order($_POST['address'], $_POST['importance'], $_POST['tool'], $_POST['status']);
    $o->create();
}



require 'app/Views/CreateOrder.View.php';
