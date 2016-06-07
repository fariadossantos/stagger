<?php

class connect {
  var $conn;
  function connect (){
    $this->conn = new PDO('mysql:host=localhost;dbname=stagger', 'root', '');
  }
}


$conect = new connect();

?>
