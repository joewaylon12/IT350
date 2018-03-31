<?php

$database = 'Cars';
$link = mysqli_connect('localhost','jared','camaro182', $database);


$name = mysqli_real_escape_string($link, $_POST['name']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$description = mysqli_real_escape_string($link, $_POST['description']);


        
$stmt = $link->prepare("INSERT INTO Products (name, price, description) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $name, $price, $description);

$stmt->execute();

header("Location: admin.php");

?>   
    