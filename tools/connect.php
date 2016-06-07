<?php

class connect {
  var $conn;
  function connect (){
    $this->conn = new PDO('mysql:host=localhost;dbname=u163653339_stagr', 'u163653339_root', '1q2w3e4r5t6y');
  }
}


$conect = new connect();

?>
