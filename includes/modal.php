 <!-- This modal for used for sign in -->
 <div class="model_container" id="login">
    <div class="_modal">
      <a href="#" class="close">X</a>
      <span class="modal_heading">Enter Your Details</span>
      <form action="helpers/signin.php" method="post">
        <input type="email" name="email" placeholder="Email"><br>
        <span style="color:red; font-size: 15pt;">
          <?php
            if(isset($_SESSION['loginErr'])){
              echo "*".$_SESSION['loginErr'];
              unset($_SESSION['loginErr']);
            }
          ?>
        </span>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="sumbit" value="Signin" class="signin">
      </form>
    </div>
</div>
<!-- End of signin modal -->

<!-- This modal is used for signup -->
    <div class="model_container_signup" id="signup">
      <div class="_modal_signup">
        <a href="#" class="close_signup">X</a>
        <span class="modal_heading_signup">Enter Your Details</span>
        <form action="helpers/signupprocess.php" method="post" enctype="multipart/form-data">
          <div>
            <label style="font-size: 15pt;">First Name<span  style="color:red;"> *<br/></span>
                      <?php
                        if(isset($_SESSION['nameErr'])){
                           echo $_SESSION['nameErr'];
                            unset($_SESSION['nameErr']);
                          }
                       ?>
              </label>
            <input type="text" name="name" placeholder="Name"/>
          </div>


          <div>
            <label style="font-size: 15pt;">User-Name <span  style="color:red;" > *<br/></span>
                      <?php
                        if(isset($_SESSION['usrnameErr'])){
                           echo $_SESSION['usrnameErr'];
                            unset($_SESSION['usrnameErr']);
                          }
                       ?>
              </label>
            <input type="text" name="username" placeholder="UserName"/>
          </div>
          
          <div>
            <label style="font-size: 15pt;">Email <span  style="color:red;" > *<br/></span>
                      <?php
                        if(isset($_SESSION['emailErr'])){
                           echo $_SESSION['emailErr'];
                            unset($_SESSION['emailErr']);
                          }
                       ?>
              </label>
            <input type="email" name="email" placeholder="Email"/><br>
          </div>

          <div>
            <label style="font-size: 15pt;">Profile Picture
              <span  style="color:red;" > *<br/></span>
                      <?php
                        if(isset($_SESSION['imgErr'])){
                           echo $_SESSION['imgErr'];
                            unset($_SESSION['imgErr']);
                          }
                       ?>
              </label>
              <input type="file" name="img"/>
          </div>

          <div>
            <label style="font-size: 15pt;">Password
              <span style="color:red;">*
                        <?php
                          if(isset($_SESSION['pwdErr'])){
                            echo $_SESSION['pwdErr'];
                            unset($_SESSION['pwdErr']);
                          }
                        ?>
                 </span>
              </label><br>
             <input type="password" name="password" placeholder="password"/><br>
             <input type="password" name="rpassword" placeholder="Comfirm password">
          </div>
          <input type="submit" name="sumbit" value="Signup" class="signup">
        </form>
      </div>
    </div>
<!-- End of signup modal -->
