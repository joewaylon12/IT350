<?php


$name = $_POST['usr'];
$date = $_POST['usrdate'];
$comment = $_POST['endorsecomment'];

$data = array("name"=>$name, "date"=>$date, "comment"=>$comment);

$inp = file_get_contents('js/endorsements.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('js/endorsements.json', $jsonData);

header("Location: endorsements.php");