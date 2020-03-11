<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
require 'app/Models/status.php';
require 'app/Models/importance.php';
require 'app/Models/order.php';

function createAddress() {
    $a= new address;
    var_dump($a);
} 


require 'app/Views/CreateAddress.View.php';
