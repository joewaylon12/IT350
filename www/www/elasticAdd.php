<?php

$name = "\"" . $_POST['nameM'] . "\"";
$email = "\"" . $_POST['emailM'] . "\"";

shell_exec('bash addVariables.sh ' . $name . " " . $email);

//header("Location: registerH.php");

?>

<html>
	<h2>Successful Add to Elastic Search!</h2>
	<a class="click-me" href="registerH.php">Click Here to Return to Previous Screen!</a> 
</html>