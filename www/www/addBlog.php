<?php

$database = 'Cars';
$link = mysqli_connect('localhost','jared','camaro182', $database);

$subject = mysqli_real_escape_string($link, $_POST['subject']);
$text = mysqli_real_escape_string($link, $_POST['text']);


$stmt = $link->prepare("INSERT INTO Blog (subject, text) VALUES (?, ?)");

$stmt->bind_param("ss", $subject, $text);

$stmt->execute();

header("Location: admin.php");

?>   
    