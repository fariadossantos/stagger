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
    <script src="js/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="css/w3.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/vn.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <title>Stagger</title>
</head>
<body class="w3-black"  >
    <div class="vn-col l3 s10 m7" style="margin:0 auto; ">
          <div class="w3-black" style=" position:absolute">

          </div>
          <div class="w3-row  w3-top vn-menu">
            <ul class="w3-navbar">
              <li><a href="index.php" style="padding:2px, margin:0" class=" w3-hover-black" ><i class="material-icons">arrow_back</i></a></li>
              <li></li><li></li>
              <li class=""><a href="#" class=" w3-hover-black"><i class="material-icons">search</i></a></li>
            </ul>
          </div>

          <div class="w3-white w3-row" style="" >
              <div class="w3-col s6">
              <img class="w3-image vn-no-padding" src="img/ba.png" alt="" />
              <img class="w3-image vn-no-padding" src="img/bb.png" alt="" />
              <img class="w3-image vn-no-padding" src="img/red.png" alt="" />
              <img class="w3-image vn-no-padding" src="img/37.jpg" alt="" />
              <img class="w3-image vn-no-padding" src="img/30.jpg" alt="" />
              <img class="w3-image vn-no-padding" src="img/22.jpg" alt="" />
              <img class="w3-image vn-no-padding" src="img/40.jpg" alt="" />
              </div>

              <div class="w3-col s6">
                <img class="w3-image" src="img/bc.png" alt="" />
                <img class="w3-image" src="img/bd.png" alt="" />
                <img class="w3-image" src="img/bh.jpg" alt="" />
                <img class="w3-image" src="img/logo.jpg" alt="" />
                <img class="w3-image" src="img/38.jpg" alt="" />
                <img class="w3-image" src="img/39.jpg" alt="" />
                <img class="w3-image" src="img/41.png" alt="" />
              </div>

          </div>
    </div>


    <div class="w3-row vn-login-cover vn-margin-auto " style="">

       <form class="w3-display-middle"  id="vn-form-init" name="" action="" method="post">
         <p class="msg"></p>
         <p class=""  >
             <input type="text" name="name" placeholder="Login" id="vn-login" onclick="addPassword()"
            class="w3-center w3-round w3-border w3-border-white" style="background-color:transparent; width:192px">
         </p>

         <!-- Password input field shows when login is clicked -->
         <p class="" id="vn-login-password" style="display:none;">
             <input type="password" name="loginpassword" placeholder="Password"
            class="w3-center w3-round w3-border w3-border-white" style="background-color:transparent; width:192px ">
         </p>
         <!-- Show login submit button only when login is clicked -->
         <p id="vn-login-submit" style="display:none;">
           <input type="submit" name="name" value="Login"
           class="w3-center w3-round w3-border w3-border-white " style=" background-color:transparent; width:192px; ">
         </p>

         <!-- Sign up input field - Disapear when login is clicked -->
         <p id="vn-signup-username" style="display:none;" >
           <input type="text" name="username" value="" placeholder="your name"
            class="w3-center w3-round w3-border w3-border-white" style="background-color:transparent; width:192px ">
         </p>
         <p>
           <input type="email" name="userdatasignup" value="" placeholder="Sign up" id="vn-signup" onclick="userSignup()"
            class="w3-center w3-round w3-border w3-border-white" style="background-color:transparent; width:192px ">
         </p>


         <!-- Signup password -->
         <p id="vn-signup-password" style="display:none;" >
           <input type="password" name="password" value="" placeholder="Password"
            class="w3-center w3-round w3-border w3-border-white" style="background-color:transparent; width:192px ">
         </p>

         <!-- Choose type of user - brand or individual -->
         <p id="vn-user-type" style="display:none;" onclick="" >
           <input type="radio" name="type" value="Normal" id="vn-signup-normal"
            class="w3-center w3-radio"
            style="background-color:transparent; "><label class="w3-label" for="vn-signup-normal">Normal</label>

            <input type="radio" name="type" value="Brand" id="vn-signup-brand"
             class="w3-center w3-radio"
             style="background-color:transparent;  "><label class="w3-label" for="vn-signup-brand">Brand</label>
         </p>


         <!-- Signup submit button -->
         <p id="vn-signup-submit" style="display:none;">
           <input type="submit" name="name" value="Sign up"
           class="w3-center w3-round w3-border w3-border-white " style=" background-color:transparent; width:192px; ">
         </p>



         <!-- Disapear when login or signup is clicked -->
         <p id="vn-watch">
           <input type="button" name="name" value="Just watch" id="vn-just-watch" onclick="justWatch()"
           class="w3-center w3-round w3-border w3-border-white " style="background-color:transparent; width:192px">
         </p>
       </form>
    </div>
</body>
</html>
