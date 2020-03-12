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
    $o= new order(null,$_POST['address'], null, $_POST['importance'], null, null, $_POST['tool'], null, $_POST['status'], null);
    $o->create();
}



require 'app/Views/CreateOrder.View.php';
