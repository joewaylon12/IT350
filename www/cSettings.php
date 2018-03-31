<?php

$database = 'IT210';
$table = 'Comments';

$link = mysqli_connect('localhost','jared','camaro', $database);

$db_found = mysqli_select_db($link, $database);
?>