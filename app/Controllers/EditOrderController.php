<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
require 'app/Models/status.php';
require 'app/Models/importance.php';
require 'app/Models/order.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $o= new order($_GET['objectID'] ,$_POST['address'], null, $_POST['importance'], null, null, $_POST['tool'], null, $_POST['status'], null);
        $o->update();
    }

$stati = status::getAll();
$importan = importance::getAll();
$tools = tool::getAll();
$adr = address::getAll();
$objID = $_GET['objectID'];
$selectedOrder = order::getById($objID);




require 'app/Views/EditOrder.View.php';
