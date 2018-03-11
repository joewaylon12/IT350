<html>
<body>
<p>This php page sends the data collected in the form.html file and inserts it into the MySQL database</p>

<?php
$database = "webforms";
$table = "studentform";

//Note that you'll need to update your username and password below
$db_handle = mysqli_connect("localhost","jared","camaro", $database);


//If the database is found, then this inserts values from the form.html 
//into the database, otherwise it prints "Database NOT Found
if ($db_handle){
   print "Database Found <br />";
   $query = "INSERT INTO $table (FirstName, LastName, Major) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[major]')";
   mysqli_query($db_handle,$query);
   print "One record added";
}

else {
   print "Database NOT Found";
}

mysqli_close($db_handle);

//As a challenge you can try and have it check if the records were actually added
//and if not, have it send an error message instead of the "One record added" message
?> 

</body>
</html>
loc