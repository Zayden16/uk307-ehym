<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
require 'app/Models/order.php';
$amountOfTools = tool::countAll();
$amountOfAddresses= address::countAll();
$amountOfOrders=order::countAllActive();
$amountOfOrdersClosed=order::countAllClosed();
require 'app/Views/MainMenu.View.php';
