<?php
require 'app/Models/address.php';
require 'app/Models/importance.php';
require 'app/Models/status.php';
require 'app/Models/order.php';

$Orders = order::getAll();
var_dump($Orders);

require 'app/Views/Orders.View.php';
