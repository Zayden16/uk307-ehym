<?php
require 'app/Models/tool.php';
$amountOfTools = tool::countAll();
require 'app/Views/MainMenu.View.php';
