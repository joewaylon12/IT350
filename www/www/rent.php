<?php
session_start();
include 'settings.php';


$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$car = mysqli_real_escape_string($link, $_POST['car']);
$date = mysqli_real_escape_string($link, $_POST['date']);


$stmt = $link->prepare("INSERT INTO Customers (name, email, car, date1) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $name, $email, $car, $date);

$stmt->execute();

echo "WE WILL CONTACT YOU SOON!";
?>