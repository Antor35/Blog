<?php
 $name = $_POST['category_name'];
 include '../config/config.php';
 include '../lib/Database.php';
 $db = new Database();
 $query = "INSERT INTO categories (name) VALUES ('$name')";
 $result = $db->insert($query);
 if($result){
 	header("location:category.php");
 	exit();
 }else{
 	echo "error";
 	die();
 }
?>