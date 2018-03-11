<?php
session_start();
include 'settings.php';

$name = $_POST['name'];
$email = $_POST['email'];
$usernameR = $_POST['usernameR'];
$passwordR = $_POST['passwordR'];
$encript = sha1($passwordR);



$sql = "SELECT * FROM Users WHERE name = '$name' OR email = '$email' OR username = 'usernameR'";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);


if($num == 1) {
    
    echo "Sorry, this Name/Email/Username already exists! <br>"; 
    echo "<a href='landing.php'>Return to Registration</a>";
      
} else {
    $sql = "INSERT INTO Users (name, email, username, password, logged_in) 
    VALUES ('$name', '$email', '$usernameR', '$encript', 1)";
    mysqli_query($link, $sql);
    $_SESSION['var'] = 1;
    $_SESSION['user'] = $usernameR;
    header("Location: contact.php");   
}





?>