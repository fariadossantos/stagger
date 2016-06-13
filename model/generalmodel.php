<?php
require_once('../tools/connect.php');

class generalmodel {
  function generalmodel(){
    $this->connect = new connectionbd;
  }
  function login ($c){
    $this->conn->default->Execute("SELECT * FROM tblUSer");
  }
}

 ?>
