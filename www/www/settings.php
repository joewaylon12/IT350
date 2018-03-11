<?php

$database = 'Cars';

$link = mysqli_connect('localhost','jared','camaro182', $database);

$db_found = mysqli_select_db($link, $database);
?>