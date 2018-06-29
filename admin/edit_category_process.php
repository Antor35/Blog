<?php 
	$name = $_POST['category_name'];
	$id   = $_POST['id'];
	include '../config/config.php';
    include '../lib/Database.php';
	$db = new Database();
	$query = "UPDATE categories SET name = '$name' WHERE categories.id ='$id'";
	$result = $db->update($query);
	header('location:category.php');
	exit();
?>