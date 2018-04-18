<?php
session_start();
include 'settings.php';


$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);


$stmt = $link->prepare("INSERT INTO Newsletter (name, email) VALUES (?, ?)");

$stmt->bind_param("ss", $name, $email);

$stmt->execute();

mysqli_query($link, $sql);

header("Location: home.php");
?>