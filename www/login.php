<?php
session_start();
include 'settings.php';

$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$encript = sha1($password);


$sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$encript'";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);


if($num == 1) {
    
    
    $sql = "UPDATE Users SET logged_in = 1 WHERE username = '$username'";
    mysqli_query($link, $sql);
    $_SESSION['var'] = 1;
    $_SESSION['user'] = $username;
    header("Location: admin.php");
    
} else {
    echo "Your username or password is incorrect!";   
}


?>