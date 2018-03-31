<?php
session_start();

$database = 'Cars';
$table = 'Users';

$link = mysqli_connect('localhost','jared','camaro182', $database);


$username = $_SESSION['user'];
$sql = "UPDATE Users SET logged_in = 0 WHERE username = '$username'";
mysqli_query($link, $sql);
header("Location: admin.php");

session_destroy();

?>