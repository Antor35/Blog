<?php
  session_start();
  if(!isset($_SESSION['user']) || $_SESSION['user'] !== 'login'){
    header("location:../index.php");
    exit();
  }
   include '../config/config.php'; 
   include '../lib/Database.php'; 

   $db = new Database();
   $query = "SELECT * from categories"; 
   $categories = $db->select($query);


   if(isset($_POST['post'])){

   		$category = $_POST['category'];
   		$query = "SELECT id from categories where name='".$category."'";
   		$x = $db->select($query)->fetch_assoc();
  		$cat = $x['id'];
   		$title = $_POST['title'];
   		$author = $_SESSION['author'];
   		$body = $_POST['body'];

   		$tags = $_POST['tag'];

   		$query = "INSERT INTO posts (category, title, body, author, tags)
	    VALUES ('".$cat."', '".$title."', '".$body."', '".$author."', '".$tags."')";
	    $x = $db->insert($query);
	    header("location:../posts.php");
	    exit();
   }	

?>
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
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

  </head>

  <body>

  	<div class="blog-masthead">
      <div class="container">
        <nav class="row blog-nav">
          <a class="col-md-1 blog-nav-item" href="../index.php">Home</a>
          <a class="col-md-9 blog-nav-item" href="../posts.php">All posts</a>
          <a class="col-md-2 blog-nav-item" href="../helpers/logout.php">logout</a>
        </nav>
      </div>
    </div>


	 <div class="post">
	 	<form class="form-group"  action="addpost.php" method = "post">
	 		<div>
	 			<label>Post Tittle</label>
	 			<input type="text" name="title">
	 		</div>
	 		<div>
	 			<label>Post</label>
	 			<textarea cols="65" rows="15" name="body"></textarea>
	 		</div>
	 		<div>
	 			<label>Category</label>
	 			<select class="form-control" name = "category">
	 				<?php while($row=$categories->fetch_assoc()): ?>
				    <option ><?php echo $row['name']; ?></option>
				   <?php endwhile; ?>
				</select>
	 		</div>
	 		<div>
	 			<label>Add Tag</label>
	 			<input type="text" name="tag">
	 		</div>
	 		<button name="post">POST</button>
	 	</form>
	 </div>
</body>
</html>