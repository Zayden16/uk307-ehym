<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
require 'app/Models/status.php';
require 'app/Models/importance.php';
require 'app/Models/order.php';


$order = order::getById($_GET['orderID']);

require 'app/Views/EditOrder.View.php';
