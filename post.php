<?php include 'includes/header1.php'; ?>
<?php
  $db       = new Database();


  $userid   = $_SESSION['userid'];

  $query    = "SELECT username,image from user where id='".$userid."'";
  $user     = $db->select($query);
  $row      = $user->fetch_assoc();
  $img      = str_replace("../","",$row['image']);
  $username = $row['username'];

  if(isset($_POST['cmnt'])){
  $cmnt     =  $_POST['cmnt'];
  $cmnt     = str_replace("'", "\'", $cmnt);
  $cmnt     = str_replace('"', '\"', $cmnt);
  $post_id  =  $_POST['postid']; 
  
  $query    = "INSERT INTO 
              comment (post_id, cmnt_body, user) 
               VALUES (".$post_id.",'".$cmnt."','".$username."')";

    $db->insert($query);
    header('location: post.php?id='.$post_id);
    exit();
  }
  if(isset($_GET['rply']) && $_GET['rply'] !==""){
      $rply    = $_GET['rply'];
      $rply    = str_replace("'", "\'", $rply);
      $rply    = str_replace('"', '\"', $rply);

      $author  = $username;
      $cmntId  = $_GET['cmnt_id'];

      $query   = "INSERT INTO 
                rply(cmnt_id,author,rply_body)
                VALUES('".$cmntId."','".$author."','".$rply."')";
      $db->insert($query);
      header('location: post.php?id='.$_GET['id']);
      exit();
  }
?>
<?php 

	$id          = $_GET['id'];
  
  $db          = new Database();// Create db object

  
  $query       = "SELECT * from posts where id =".$id;/// create and run query for getting post
  $post        = $db->select($query)->fetch_assoc();

   
  $query       = "SELECT * from categories";/// create and run query for getting category
  $categories  = $db->select($query);

 
  $query       = "SELECT * from comment WHERE post_id=".$id; ///create and run query for getting comment
  $comments    = $db->select($query);

?>
<div class="blog-post">

    

    <h2 class="blog-post-title"><?php echo $post['title'];?></h2>
    <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author'];?></a></p>
     <p><?php echo $post['body'];?> </p>
     <label>Comments: 
        <?php
          $row = 0;
          if($comments) $row = $comments->num_rows;
          echo $row;
       ?>
        <br>
        <ul>
          <?php while( $row && $row = $comments->fetch_assoc()) : ?>
          <li>
             <!-- <h2>Rafsan Jany</h2> -->
             <p style="padding: 5px; font-family: Lucida Console, Courier, monospace;">
              <a href="#"><?php echo $row['user'];?></a>
              <?php 
              echo $row['cmnt_body']?></p>
              <?php
                $query = "SELECT * from rply WHERE cmnt_id=".$row['id'];
                $rplys = $db->select($query);
                 if($rplys){
                    echo "<ul>";
                    while($r = $rplys->fetch_assoc()){
                      echo "<li>";
                      echo "<a href = '#'>".$r['author']."</a>"." . ".$r["rply_body"]."<br>";
                      echo "</li>";
                      //echo "inside <br>";
                   }
                   echo "</ul>";
                 }
               ?>
                <?php
              if($row['user'] === $username){
               // echo '<a href="#" style="margin: 3px; padding: 3px;">Edit</a>'; 
             /* echo '<a href="post.php?rply='.'yes'.' & id='.$id.'" style="margin: 3px; padding: 3px;">Reply</a>'; */
                // echo "<button onclick='myFunction()'> Reply </buttom>";
              }
               echo '<form actor="post.php" method ="GET">
                   <textarea name = "rply" cols = "20" rows="1"></textarea>
                   <input  type = "hidden" name= "id" value="'.$id.'"/>
                   <input  type = "hidden" name= "cmnt_id" value="'.$row['id'].'"/>
                   <button class="btn btn-info">Reply</button>
                   </form> ';
             ?>   
          </li>
          <?php endwhile; ?>
        </ul>
      </label>
        <div>
              <form action="post.php?id=1" method="post">
               Your Comment : 
               <textarea name="cmnt"></textarea>
               <input type="hidden" name="postid" value="<?php echo $id?>">
               <button class="btn btn-info">sumbit</button>
             </form>
        </div>
      
</div>
<?php include 'includes/footer1.php' ?>
