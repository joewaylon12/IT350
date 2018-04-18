<?php

$name = "\"" . $_POST['nameM'] . "\"";
$email = "\"" . $_POST['emailM'] . "\"";

shell_exec('bash addVariables.sh ' . $name . " " . $email);

header("Location: registerH.php");

?>