<?php 
	session_start();
	require 'format_helper.php';
	include '../config/config.php';
	include '../lib/Database.php';
	$nameErr = $usrnameErr = $emailErr = $pwdErr = $imgErr = "";
	$name;$username;$email;$img; $password;
	if($_SERVER["REQUEST_METHOD"] === "POST"){

		if(test_input($_POST['name'])===""){
			$nameErr="First Name Required";
			$_SESSION['nameErr']=$nameErr;
		}
		else{
			$name = test_input($_POST['name']);
		}

		if(test_input($_POST['username'])===""){
			$usrnameErr="User Name Required";
			$_SESSION['usrnameErr']=$usrnameErr;
		}
		else{
			$username = test_input($_POST['username']);
		}
		if(test_input($_POST['email'])==='' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$emailErr="Invalid Email";
			$_SESSION['emailErr']=$emailErr;
		}else{
			$email = test_input($_POST['email']);
		}

		if(!strcmp(test_input($_POST['rpassword']),test_input($_POST['rpassword']))||test_input($_POST['password'])==="" || test_input($_POST['rpassword'])==="" || !isSame(test_input($_POST['password']),test_input($_POST['rpassword']))){
			$pwdErr = "Password is Don't match or Invalid password";
			$_SESSION['pwdErr']=$pwdErr;
		}else{
			$password = test_input($_POST['password']);
		}

		// image file Handle

		if(isset($_FILES['img']['name'])){
		  if(empty($_FILES['img']['name'])){
			$imgErr = "please Select a Photo !";
			$_SESSION['imgErr'] = $imgErr;
		  }
		 else{
		 		// $name = $_FILES['img']['name'];
	            $tmpname = $_FILES['img']['tmp_name'];
				$target_dir = "../uploads/";
				$t = uniqid();
				$target_file = $target_dir.$t.basename($_FILES['img']['name']);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				$check = getimagesize($_FILES['img']['tmp_name']);
				if($check === false){

					$imgErr = "File in not a image!";
					$_SESSION['imgErr'] = $imgErr;

				}

				else if($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"&& $imageFileType !== "gif"){

					$imgErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$_SESSION['imgErr'] = $imgErr;
				}

				if (!file_exists('/opt/lampp/htdocs/blog/'.$target_dir)){
				    mkdir('/opt/lampp/htdocs/blog/'.$target_dir); 
				}
				$x = move_uploaded_file($tmpname, $target_file);
				// var_dump($x);
				// die();
		  }
		}
		
	}

	if($nameErr!=="" || $usrnameErr !== "" || $emailErr !=="" ||$pwdErr !=="" || $imgErr !==""){
		header("location:../index.php#signup");
		//echo "hehe";
		exit();
	}

	// create a database object
	 $db = new Database();
	 // $query = "SELECT * from posts";
	 $query = "INSERT INTO user (name, username, image, email, password)
	  VALUES ('".$name."', '".$username."', '".$target_file."', '".$email."', '".$password."')";
	 $x = $db->insert($query);

	
	 if($x){
	 	$_SESSION["user"] = "login";
	 	//$_SESSION['userid'] = ;
	 	header("location:../posts.php");
	 }
?>

