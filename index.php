<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <meta name="description" content="Stagger a fashion and branding app, Angola, Israel">
    <link rel="shortcut icon" href="img/12.png" media="screen" title="no title" charset="utf-8">
    <style media="screen">
      *{font-family: 'Lato', sans-serif;}
    </style>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/w3.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <title>Stagger</title>
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
            <!-- JAVA SCRIPT CODE THAT DISPLAY THE MENU -->
            <script>
                    function myFunction() {
                        var x = document.getElementById("demo");
                        if (x.className.indexOf("w3-show") == -1) {
                            x.className += " w3-show";
                        } else {
                            x.className = x.className.replace(" w3-show", "");
                        }
                    }
            </script>

            <!-- END OF JS CODE -->
          <div class="w3-col l12 w3-center " ><br><br><br><br><br>

              <!-- APP LOGO -->
              <div class="w3-center">
                <a href="home0.php"><img class="w3-image" src="img/12.png" alt="" style="width:40%;" /></a>
              </div><br><br>
              <!-- LOG IN -->
                  <div class="w3-center w3-padding">
                    <p>
                      <input class="w3-input w3-border-0 w3-round w3-text-grey " type="text" name="userName" value="" placeholder="your name">
                    </p>
                    <p>
                        <input class="w3-input w3-border-0 w3-round w3-text-grey " type="password" name="userPassword" value="" placeholder="your password">
                    </p>
                    <p>
                      <span class=" w3-col l12 w3-round w3-grey w3-text-dark-grey w3-hover-text-grey w3-padding" type="submit" name="button" >Login</span>
                    </p>

                  </div><br><br><br><br><br><br>
          </div>
      <!--/div-->
    </div>

  </body>
</html>
