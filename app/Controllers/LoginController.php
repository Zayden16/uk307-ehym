<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$dbh = connectToDatabase();


	$username = $_POST['username'];
	$password = $_POST['password'];

	// Tabelle benötigt folgende Spalten:
	// id, int, auto_increment
	// username, varchar
	// password, varchar
		
	$statement = $dbh->query("SELECT * FROM users WHERE username = '$username' and password = '$password'");
	$users = $statement->fetchAll();

	if(count($users) > 0) {
		echo 'Du bist angemeldet!';
	} else {
		echo 'Falsches Passwort!';
	}

}

require 'app/Views/login.view.php';