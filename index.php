<?php include 'includes/header.php'; ?>
<?php 

  // Create db object
  $db = new Database();

  /// create query 
  $query = "SELECT * from posts LIMIT 2";
  /// run query 
  $posts = $db->select($query);

  /// create query 
  $query = "SELECT * from categories";
  /// run query 
  $categories = $db->select($query);

?>

<!-- Contant Here  -->

<?php if($posts): ?>
  <?php while($row = $posts->fetch_assoc()): ?>
      
      <div class="blog-post">
         <h2 class="blog-post-title"><?php echo $row['title']; ?> </h2>
         <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> <a href="#"><?php echo $row['author']; ?></a></p>
         <p><?php echo shortenText($row['body']); ?></p><a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
      </div> 
      
  <?php endwhile;?>
<?php else: ?>
  <p>There is no post Yet !</p>
<?php endif; ?>

<!-- End of contant -->

<?php include 'includes/footer.php' ?>

