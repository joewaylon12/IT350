<?php
session_start();
include 'settings.php';
//Checking if the user is logged in or not!
if (!isset($_SESSION['var'])){
        header("Location: landing.php");
}
?>

<html>
	<head>
		<title>Admin</title>
		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script 	src="/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="/css/custom.css"/>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="/css/custom.css"/>
        <!--Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imgages/favicon-16x16.png">
        <link rel="manifest" href="images/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
	</head>

	<body>
		<section>
			<?php
                include_once('nav.php');
            ?>
            <h2>Backups</h2>
            <br>
            
            <div>
            	 <form action="doBackup.php" method="POST">
                    <button type="submit" class="btn btn-success">Backup Databases Now</button>
                </form>
            </div>
            
            <div>
            	<h3>SQL Database</h3>
            	<b>Running</b>
            	<br>
            	<?php
            		$output = shell_exec('bash sqlCheck.sh');
            		echo $output;
            	
            	?>
            
            	<br>
            	<h3>Mongo Database</h3>
            	<b>Running</b>
            
            	<br>
            	<h3>Elastic Search</h3>
            	<b>Running</b>
            	<br>
            	<?php
            		$output = shell_exec('bash elasticsearch.sh');
            		echo $output;
            	?>
            		
            </div>
            
			<footer>
				<p>
					Copyright © 2018 by Waylon Upshaw
				</p>
			</footer>
		</section>
			<script>
				$(document).ready(function () {
				$('.dropdown-toggle').dropdown();
				});
			</script>
            <script>
             $(document).ready(function () {
                  $(".nav li").removeClass("active");
                  $('#admin').addClass('active');
            </script>
        <script src="js/custom.js"></script>
	</body>
</html>
