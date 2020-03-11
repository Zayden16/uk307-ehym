<?php
require 'app/Models/address.php';
require 'app/Models/importances.php';
require 'app/Models/status.php';
require 'app/Models/order.php';

$activeOrders = order::getAll();
var_dump($activeOrders);




require 'app/Views/ActiveOrders.View.php';
