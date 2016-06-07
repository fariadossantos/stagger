<!doctype html>
<html lang="en">
  <head>
    <?php require_once('inc/header.php'); ?>
  </head>
  <body class="w3-margin-top">
    <div class="w3-dark-grey " >
      <div class="w3-row w3-light-grey w3-container w3-padding " style=" width:30%; margin:0 auto; " >
            <!-- NAVEGATION BAR  -->
            <div class="">
                      <div class="w3-dropdown-hover">
                                <div class=" w3-right ">&#9776;</div>
                                <div class="w3-dropdown-content ">
                                  <a class="w3-blue">Sign Up</a>
                                  <a href="signup.php">Brand </a>
                                  <a href="signup.php">User</a>
                                </div>
                      </div>
            </div>

          <div class="w3-col l12 w3-center " ><br><br><br><br><br>

              <!-- APP LOGO -->
              <div class="w3-center">
                <a href="home0.php"><img class="w3-image" src="img/12.png" alt="" style="width:40%;" /></a>
              </div><br><br>
              <!-- LOG IN -->
                  <div class="w3-center w3-padding">
                  <form class="" name="login" action="" method="post">
                    <p>
                      <input class="w3-input w3-border-0 w3-round w3-text-grey " type="text" name="name" value="" placeholder="your name or e-mail">
                    </p>
                    <p>
                        <input class="w3-input w3-border-0 w3-round w3-text-grey " type="password" name="password" value="" placeholder="your password">
                    </p>
                    <p>
                      <input type="submit"  class="w3-col l12 w3-round w3-btn w3-hover-none w3-hover-grey w3-hover-text-white w3-grey w3-text-dark-grey w3-hover-text-grey w3-padding"name="btnlogin" value="Login" >
                    </p>
                  </form>
                  </div><br><br><br><br><br><br>
          </div>
      <!--/div-->
    </div>

  </body>
</html>
