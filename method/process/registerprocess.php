<?php
session_start();
include '../../connection/connection.php';
global $db;
		$username = $_POST['name1'];
		$email    =	$_POST['email1'];
		$password =	$_POST['password1'];
		$contact  = $_POST['contact1'];

		$query = "INSERT INTO users (username,email,password,contact) VALUES ('{$username}','{$email}','{$password}','{$contact}')";
		$db->exec($query);
		echo "success!";

 ?>
