<?php include 'includes/header1.php'; ?>
<?php 

  // Create db object
  $db = new Database();
 // $posts;
  // $query = "SELECT * from posts";
  // $posts = $db->select($query);
  // $total_post = $posts->num_rows;
   $posts_per_page = 5;
  // $total_page = ceil($total_post/$posts_per_page);

  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }

  $page_start = ($page-1)*$posts_per_page;

  if(isset($_GET['category'])){
    $category = $_GET["category"];
     /// create query 
       $query = "SELECT * from posts where category=".$category." LIMIT ".$page_start.",".$posts_per_page;
       $posts_show = $db->select($query);
      if($posts_show){
         $total_post = $posts_show->num_rows;
        $total_page = ceil($total_post/$posts_per_page);
      }

       /// run query

  }else{
        /// create query 
       $query = "SELECT * from posts LIMIT ".$page_start.",".$posts_per_page;
       $posts_show = $db->select($query);
       $total_post = $posts_show->num_rows;
       //$posts_per_page = 5;
       $total_page = ceil($total_post/$posts_per_page);
  }

  /// create  and run query for category
     $query = "SELECT * from categories"; 
     $categories = $db->select($query);


  /// create and run query for getting user information
    $userid = $_SESSION['userid'];
    // echo $userid;
    // die();
    $query = "SELECT username,image from user where id='".$userid."'";
    $user = $db->select($query);

    $row = $user->fetch_assoc();
    //$img = substr($row['image'],3);
    $img = str_replace("../","",$row['image']);
    $username = $row['username'];
?>


<?php if($posts_show): ?>
  <?php while($row = $posts_show->fetch_assoc()): ?>
      <div class="blog-post">

         <h2 class="blog-post-title"><?php echo $row['title']; ?> </h2>

         <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> <a href="#"><?php echo $row['author']; ?></a></p>

          <p><?php echo shortenText($row['body']); ?></p><a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
      </div> 
  <?php endwhile;?>
<?php else: ?>
  <p>There is no post Yet !</p>
<?php endif; 
  if($posts_show){
    for($page = 1; $page<=$total_page; $page++){
    echo "<a class='paging' href='posts.php?page=".$page."'>".$page."</a>"." >> ";
  }
  }
?>

<?php include 'includes/footer1.php' ?>

