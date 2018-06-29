<?php 
  session_start();
?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?> 
<?php include 'helpers/format_helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

  </head>

  <body>

   <?php  include 'modal.php'; ?>

  
    <div class="blog-masthead">
      <div class="container">
        <nav class="row blog-nav">
          <a class="col-md-1 blog-nav-item navItem" href="index.php">Home</a>
          <a class="col-md-9 blog-nav-item navItem" href="posts.php" >All posts</a>
          <a class="col-md-1 blog-nav-item navItem" href="#login" >Signin</a>
          <a class="col-md-1 blog-nav-item navItem" href="#signup">Signup</a>
        </nav>
      </div>
    </div>

   <!--  <div>
      <marquee> <p id="notic"> " FOR READ AND WRITE HERE CREATE YOUR ACCOUNT FIRST AND SIGN IN ! LETS'S WRITE "</p></marquee>
    </div> -->
    
    <div class="container-fluid">
      <div class="blog-header">
        <div class="logo"><img src="images/logo.png"/></div>
        <h1 class="blog-title">Write Here | Write Now ....</h1>
        <p class="lead blog-description">News , sports , Movie and others </p>
      </div>
        <br><br>
      <div class="row">
        <div class="col-md-4 blog-main">


