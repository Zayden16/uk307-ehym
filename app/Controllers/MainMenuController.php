<?php

$db= connectToDatabase();
$statement = $db->prepare('SELECT COUNT(toolID) FROM `tools`');
$statement->execute();
$tools = $statement->fetchAll(PDO::FETCH_COLUMN);

require 'app/Views/MainMenu.View.php';