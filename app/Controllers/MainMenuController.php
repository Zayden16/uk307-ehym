<?php
require 'app/Models/tool.php';
require 'app/Models/address.php';
$amountOfTools = tool::countAll();
$amountOfAddresses= address::countAll();
require 'app/Views/MainMenu.View.php';
