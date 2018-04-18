<?php
	if($_POST){
		$connection = new Mongo();
		$db = $connection->mongophp;
		$rec['nameM'] = $_POST['nameM'];
		$rec['emailM'] = $_POST['emailM'];
		$db->precord->insert($rec);
	}
?>