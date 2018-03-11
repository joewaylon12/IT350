<!DOCTYPE HTML>

<!--
My Home Page
-->

<html>
	<head>
		<title>Home Page</title>
		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script  src="/js/bootstrap.js"></script>
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

			<article>
				<div class="left">
                    <br>
					<img src="./images/Camaro.jpg"/>
			    </div>
			</article>

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
                  $(".nav").removeClass("active");
                  $('#home').addClass('active');
            </script>
	</body>
</html>
