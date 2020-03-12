<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
require 'app/Models/status.php';
require 'app/Models/importance.php';
require 'app/Models/order.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a= new address($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['addressL1'], $_POST['addressL2']);
    $a->create();
}


require 'app/Views/CreateAddress.View.php';
