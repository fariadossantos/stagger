<?php
session_start();
require_once('../tools/connect.php');

class generalmodel {
  var $result;
  var $registers;
  function generalmodel(){
    $this->connect = new connectionbd;
  }
  function login ($c){
    $this->result     = $this->connect->master->Execute("SELECT * FROM tblUser WHERE tblUser.email = '".$c['userdatalogin']."' AND tblUser.password = '".$c['userpassword']."'");
    $this->registers  = $this->result->FetchNextObject();
    if ($this->result->numRows()>0) {
      $_SESSION['sessionUserName'] = $this->registers->NAME;
      $_SESSION['sessionUerID'] = $this->registers->ID;
      $_SESSION['sessionUserEmail'] = $this->registers->EMAIL;
      return true;
    }else {
      return false;
    }
  }

  function signup($table, $keys, $values){
    $this->result = $this->connect->master->Execute("INSERT INTO $table ($keys) VALUES ($values)");
    if ($this->result) {
      return true;
    }
    else {
      return false;
    }
  }
}

 ?>
