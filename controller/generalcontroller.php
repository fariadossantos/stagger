<?php
require('../model/generalmodel.php');

$execute = new generalmodel;

$option = $_POST['option'];

if ($option=="login") {
  $c['userdatalogin'] = mysql_real_escape_string($_POST['name']);
  $c['userpassword'] = md5(mysql_real_escape_string($_POST['loginpassword']));
  if ($execute->login($c)) {
    echo "yes";
  }
  else {
    echo "not";
  }
}
elseif ($option=="signup") {
  $c['name'] = mysql_real_escape_string($_POST['username']);
  $c['password'] = mysql_real_escape_string($_POST['password']);
  $c['email'] = mysql_real_escape_string($_POST['userdatasignup']);
  $c['password'] = md5(mysql_real_escape_string($_POST['password']));
  $type = mysql_real_escape_string($_POST['type']);
  $keys = implode(',', array_keys($c));
  $values = "'".implode("','", array_values($c))."'";
  if (!empty($type) && $type=="Brand") {
    if ($execute->signup("tblBrand", $keys, $values)) {
      echo "Sucesso";
    }
    else {
      echo "Error".$values;
    }
  }
  elseif (!empty($type) && $type=="Normal") {
    if ($execute->signup("tblUser", $keys, $values)) {
      echo "Sucesso";
    }
    else {
      echo "Error ".$values;
    }
  }
}




 ?>
