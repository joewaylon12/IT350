<?php

$database = 'Cars';
$link = mysqli_connect('localhost','jared','camaro182', $database);

$id = mysqli_real_escape_string($link, $_POST['id']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$description = mysqli_real_escape_string($link, $_POST['description']);


        
$sql = "UPDATE Products SET name = '$name', price = '$price', description = '$description' WHERE id = $id";
mysqli_query($link, $sql);

header("Location: admin.php");

?>   
    