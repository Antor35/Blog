<?php
	session_start();
	require 'format_helper.php';
	include '../config/config.php';
	include '../lib/Database.php';

	$email = $_POST['email'];
	$password = $_POST['password'];
	$db = new Database();
	$query = "SELECT id,email,password,name from user where email='$email' AND password = '$password' ";
	$user = $db->select($query);
	if($user){
		$row = $user->fetch_assoc();
		$userid = $row['id'];
		// echo $userid;
		// die();
		$_SESSION['userid'] = $userid;
		$_SESSION['author'] = $row['name'];
		$_SESSION['user'] = 'login';
		header("location:../posts.php");
		exit();
	}else{
		$_SESSION["loginErr"] = "Incorrect username/password!";
		header("location:../index.php#login");
	}
	die();
?>