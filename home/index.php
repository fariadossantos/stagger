<?php
session_start();
if (!($_SESSION['sessionUerID'])) {
  header("Location:../");
}
else {
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <meta name="description" content="Stagger a fashion and branding app, Angola, Israel">
    <link rel="shortcut icon" href="../img/12.png" media="screen" title="no title" charset="utf-8">
    <style media="screen">
      *{font-family: 'Lato', sans-serif;}
    </style>
    <link rel="stylesheet" href="../css/customize.css" title="no title" charset="utf-8">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/w3.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <title>Stagger</title>
  </head>
  <body class="w3-margin-top">
    <div class="w3-dark-grey " >
      <div class="w3-col l3 m6 s12 w3-light-grey " style="float: none; margin:0 auto; " >
        <!-- NAVAGATION BAR -->
        <div class="">
          <nav class="w3-padding w3-navbar w3-white w3-center ">
            <a class="w3-hover-light-grey w3-padding" href="#" style="width: 20%"><i class="material-icons">home</i></a>
            <a class="w3-hover-light-grey w3-padding " href="#" style="width: 20%"><i class="material-icons">search</i></a>
            <a class="w3-hover-light-grey w3-padding" href="#" style="width: 20%"><i class="material-icons">chat</i></a>
            <a class="w3-hover-light-grey w3-padding" href="#" style="width: 20%"><i class="material-icons">person</i></a>
            <a class="w3-hover-light-grey w3-padding" href="#" style="width: 20%"><i class="material-icons">camera</i></a>
          </nav>
        </div>

        <!-- POSTING FROM FRIENDS -->
        <div class="w3-padding" id="feedparentbox">
          <div class="w3-row  w3-white">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image " src="../img/33.jpg" alt="" id="feedimg" style="width: 100% cursor:pointer"/>
              <nav class="w3-navbar w3-padding w3-white w3-center w3-small">
                  <a  class="w3-hover-white w3-padding  w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/nike.jpg" alt="" style="text-align" />
                  </a>
                <a  class="w3-hover-white w3-padding w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-padding w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-padding  w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>


        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/36.jpg" alt="" id="feedimg" />
              <nav class="w3-navbar w3-padding  w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/abel.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>

        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/30.jpg" alt="" id="feedimg" />
              <nav class="w3-navbar w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/smile.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>


        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/21.jpg" alt="" id="feedimg" />
              <nav class="w3-navbar w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/smile.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>


        <div class="w3-padding w3-col s12">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/34.jpg" alt="" id="feedimg" />
              <nav class="w3-navbar w3-white w3-center w3-small">
                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/nike.jpg" alt="" style="text-align" />
                  </a>
                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>

        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/22.jpg" alt="" id="feedimg" />
              <nav class="w3-navbar w3-row-padding w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/abel.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>


        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/35.jpg" alt="" />
              <nav class="w3-navbar w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/abel.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>

        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/gengibre.jpg" alt="" />
              <nav class="w3-navbar w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/blue1.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>

        <div class="w3-padding">
          <div class="w3-row  w3-white ">
            <p class="w3-white" style="margin:0; ">
              <img class="w3-image" src="../img/amnesia.jpg" alt="" />
              <nav class="w3-navbar w3-white w3-center w3-small">

                  <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#">
                    <img class="w3-image w3-circle" src="../img/rolin.jpg" alt="" style="text-align" />
                  </a>

                <a  class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">share</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">favorite</i></i></a>
                <a class="w3-hover-white w3-hover-text-dark-grey w3-text-grey" href="#"><i><i class="material-icons">chat</i></i></a>
              </nav>
            </p>
          </div>
        </div>
  </body>
</html>
<?php } ?>
