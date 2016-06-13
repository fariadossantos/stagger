<?php
require ("adodb/adodb.inc.php");
//require ('funcoes.php');
class connectionbd {
	var $master;

	function connectionbd (){
		$this->master = NewADOConnection ("mysql");
		$this->master->dialect=3;
		$this->master->debug=false;
		$this->master->connect ("localhost", "root", "", "stagger")  or die($this->master->errorMsg());
		$this->master->Execute("SET NAMES 'utf8'");
		$this->master->Execute=('SET character_set_connection=utf8');
		$this->master->Execute=('SET character_set_client=utf8');
		$this->master->Execute=('SET character_set_results=utf8');
	}
}


// if ($con = new connectionbd()) {
// echo "Funcionando";
// }
// else {
// echo "não funcionando";
// }


?>
