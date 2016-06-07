<?php
require_once('../model/generalmodel.php');
$execution = new generalmodel;

$option = $_POST['option'];

switch ($option) {
  case 'login':
    $c['username'] = mysql_real_escape_string($_POST['name']);
    $c['password'] = md5(mysql_real_escape_string($_POST['password']));
    print_r($c);
    $execution->login($c);
    break;
  case 'signup':
    $c['name'] = mysql_real_escape_string($_POST['name']);
    $c['email'] = mysql_real_escape_string($_POST['userEmail']);
    $c['username'] = mysql_real_escape_string($_POST['userName']);
    $c['password'] = md5(mysql_real_escape_string($_POST['userPassword']));

    $keys = implode(',', array_keys($c));
    $values= '"'.implode('","', array_values($c)).'"';
    if ($execution->signup('tblUSer', $keys, $values)) {
      echo '1';
    }
    else {
      "error";
    }
    break;

  default:
    echo "404";
    break;
}
 ?>
