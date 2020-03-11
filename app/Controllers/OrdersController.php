<?php
require 'app/Models/address.php';
require 'app/Models/importances.php';
require 'app/Models/status.php';
require 'app/Models/order.php';

$Orders = order::getAll();


require 'app/Views/Orders.View.php';
