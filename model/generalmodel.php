<?php
session_start();
require_once('../tools/connect.php');

class generalmodel {

  function generalmodel(){
    $this->connect = new connect;
  }

  function login ($c){
    $sql = $this->connect->conn->prepare("SELECT * FROM tblUSer WHERE (username ='".$c['username']."' and password = '".$c['password']."') OR (email ='".$c['username']."' and password = '".$c['password']."')");
    $sql->execute();
    if ($sql->fetch(PDO::FETCH_OBJ)) {
      echo "Registos encontrados";
    }
    else{
      print_r($sql->errorInfo());
    }
  }
  function signup($table, $keys, $values){
    $sql = $this->connect->conn->prepare("INSERT INTO $table ($keys) values ($values)");
    if ($sql->execute()) {
      //SELECT DE LAST USER SIGNUP FOR GET IN NEXT PAGER TO PUT PICTURE
      $sql = $this->connect->conn->prepare("SELECT MAX(id) as  ID FROM tblUSer");
      $sql->execute();
      $iduser = $sql->fetch(PDO::FETCH_OBJ);
      $sql= $this->connect->conn->prepare("SELECT * FROM tblUSer WHERE id=".$iduser->ID);
      if ($sql->execute()) {
        $register = $sql->fetch(PDO::FETCH_OBJ);
        $_SESSION['sessionUserID'] = $register->id;
        $_SESSION['sessionNameUser'] = $register->name;
        $_SESSION['sessionUserName'] = $register->username;
        $_SESSION['sessionNameUser'] = $register->name;
        return true;
      }else {
        return false;
      }
    }
    else {
      return false;
    }
  }


}



?>
