</div><!-- /.blog-main -->

        <div class="col-md-4 sidebar-module-inset">
          <div class="sidebar-module sidebar-module-inset">
            <!-- <h4 style="font-size: 35pt; color: red;">USER GUIDE</h4>
             -->
          </div>

          <div class="sidebar-module">
            <h4>Categories</h4>
            <?php if($categories): ?>
               
                 <ol class="list-unstyled">
                  <?php while($row=$categories->fetch_assoc()): ?>
                  <li class ="categoryItem"><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                   <?php endwhile; ?>
                 </ol>
               
            <?php else: ?>
              <p>Their is no category added Yet!</p>
            <?php endif; ?>
          </div>
          <div>
             
          </div>
       </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<footer class="row footer">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


          <div class="col-md-3 leftfooter">
            <p class="contract">Contract Us</p>
            <div class="col-md-1"></div>
            <div class="col-md-7">
              <a href="#" style="font-size: 200%;"><i class="fa fa-facebook-official"></i></a><br>
                <a href="#" style="font-size: 200%;"><i class="fa fa-envelope"></i></a> <br>
                <a href="#" style="font-size: 200%;"><i class="fa fa-globe"></i>
            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="col-md-7 middlefooter pull-left">
             <p><a class="contract" href="#" >Back to top <a class="active" href="#" style="font-size: 200%;"><i class="fa fa-home"></i></a>
             </a></p>
             <p class="contract">&copy;-2018  All Rights Reserved by Rafsan Jany<br>
              This Blog is Create just for trail!<br>
             <a href="#">Privacy</a> &middot; 
             <a href="#">Terms of us</a> &middot; 
             <a href="#">About us</a> &middot; 
             <a href="#">Resources</a>

            </p>
          </div>
          <div class="col-md-2 rightfooter "></div>
 </footer>

    

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>