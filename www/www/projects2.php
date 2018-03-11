<?php
session_start();
include 'settings.php';
//Checking if the user is logged in or not!
if (isset($_SESSION['var'])){
        header("Location: projects.php");
}

?>



<!--
My Second Page
-->

<html>
	<head>
		<title>Projects</title>
		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script 	src="/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="/css/custom.css"/>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="/css/custom.css"/>
        <!--Carousel-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            
            <div class="myCarousel">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="images/Camaro.jpg" alt="Lab 1A">
                        <div class="carousel-caption">
                            <h3>Lab 1A</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/Camaro.jpg" alt="Lab 1B">
                        <div class="carousel-caption">
                            <h3>Lab 1B</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/Camaro.jpg" alt="Lab 2A">
                        <div class="carousel-caption">
                            <h3>Lab 2A</h3>
                        </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            
            
            <div class="container">
                <h2>Comments</h2>
                <div class="etable">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody id="commentsTable" name="commentsTable">
                                    <?php
                                        $database = 'IT210';
                                        $table = 'Comments';

                                        $link = mysqli_connect('localhost','jared','camaro', $database);

                                        //SQL JOIN
                                        $sqlget = "SELECT name, message, time FROM Users JOIN Comments ON Users.userID = Comments.commentID";
                                        $sqldata = mysqli_query($link, $sqlget) or die('error getting data');
                                        while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
                                            echo "<tr><td>";
                                            echo $row['name'];
                                            echo "</td><td>";
                                            echo $row['message'];
                                            echo "</td><td>";
                                            echo $row['time'];
                                            echo "</td></tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                </div>
            
                <label>If you would like to make a comment, please log in or register by <a href="contact.php">clicking here!</a></label>
                
                
            </div>
            <footer>
				<p>
					Copyright © 2017 by Waylon Upshaw
				</p>
			</footer>
            <script src="js/custom.js"></script>  
			<script>
				$(document).ready(function () {
				$('.dropdown-toggle').dropdown();
                $('#myCarousel').carousel(parseInt(gup('p')));
				});
			</script>
            <script>
             $(document).ready(function () {
                  $(".nav li").removeClass("active");
                  $('#projects').addClass('active');
            </script>
	</body>
</html>
