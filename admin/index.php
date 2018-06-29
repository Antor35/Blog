<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">
  </head>
  <body>
      <div class="container-fluid display-table">
        <div class="row display-table-row">
          <!-- this is sidebar -->
          <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu" >
            <h1 class="hidden-xs hidden-sm">Admin-Area</h1> 
            <ul>
              <li class="link active">
                <a href="index.php">
                  <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                  <span class="hidden-xs hidden-sm">Dashboard</span>
                </a>
              </li>
                

              <li class="link">
                  <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                    <span class="glyphicon glyphicon-list-alt" aria-hidder="true"></span>
                    <span class="hidden-xs hidden-sm">Article</span>
                    <span class="label label-success pull-right hidden-sm hidden-xs">20<span>
                  </a>
                  <ul class="collapse collapsable" id="collapse-post">
                    <li><a href="create-new.html">create new</a></li>
                    <li><a href="articles.html">View Article</a></li>
                  </ul>
              </li>


              <li class="link">
                  <a href="#collapse-comment" data-toggle="collapse" aria-controls="collapse-comment">
                    <span class="glyphicon glyphicon-pencil" aria-hidder="true"></span>
                    <span class="hidden-xs hidden-sm">Comments</span>
                  </a>
                  <ul class="collapse collapsable" id="collapse-comment">
                    <li>
                      <a href="approved.html">Approved
                        <span class="label label-success pull-right hidden-sm hidden-xs">20</span>
                      </a>
                    </li>
                     <li>
                      <a href="unapproved.html">Unapproved
                        <span class="label label-warning pull-right hidden-sm hidden-xs">20</span>
                      </a>
                    </li>
                  </ul>
              </li>



              <li class="link">
                <a href="commentors.html">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  <span class="hidden-xs hidden-sm">Commentors</span>
                </a>
              </li>

              <li class="link">
                <a href="tags.html">
                  <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                  <span class="hidden-xs hidden-sm">Tags</span>
                </a>
              </li>

              <li class="link settings-btn">
                <a href="setting.html">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-xs hidden-sm">Setting</span>
                </a>
              </li>
            </ul> 
          </div>
          <!-- this is main contain -->
          <div class="col-md-10 col-sm-11 display-table-cell valign-top">
             <div class="row">
                <header class="clearfix" id="nav-header">
                  <div class="col-md-5">
                    <nav class="navbar-default pull-left">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                    </nav>
                    <input type="text" class="hidden-sm hidden-xs" id="header-search-field" name="" placeholder="Search for anythings...">
                  </div>
                  <div class="col-md-7">
                      <ul class="pull-right">
                        <li id="wellcome" class="hidden-xs">Wellcome to admin area</li>
                        <li class="fixed-width">
                          <a href="#">
                            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                            <span class="label label-warning">3</span>
                          </a>
                        </li>
                        <li class="fixed-width">
                          <a href="#">
                            <span class="glyphicon glyphicon-envelope"></span>
                            <span class="label label-message">3</span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="logout">
                            <span class="glyphicon glyphicon-log-out"></span>
                            logout
                          </a>
                        </li>
                      </ul>
                  </div>
                </header>
              </div>
<div class="row">
   <div class="col-md-4 user">
      <div class="user-option">
        <img src="images/user.png">
        <form action="user.php">
          <button class="btn btn-primary people">People</button>
        </form>
      </div>
   </div>

   <div class="col-md-4 all-post">
     <div class="post-option">
        <img src="images/posts.png">
        <form action="posts.php">
          <button class="btn btn-primary posts">Posts</button>
        </form>
      </div>
   </div>

   <div class="col-md-4 all-category">
     <div class="categoty-option">
        <img src="images/categoty.jpg">
        <form action="category.php">
          <button class="btn btn-primary categoty">Category</button>
        </form>
      </div>
   </div>
</div>
<div class="row">
              <footer id="admin-footer" class="clearfix">
                <div class="pull-left"><b>Copyright </b> &copy;  2018</div>
                <div class="pull-right">Adminstration area</div>
              </footer>
            </div>
        </div>
      </div>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="js/default.js"></script>
</body>
</html>