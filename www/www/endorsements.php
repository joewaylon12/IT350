<!DOCTYPE HTML>

<!--
My Home page!
-->

<html>
	<head>
		<title>Endorsement Page</title>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/bootstrap.js"></script>
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Links for the bootstrap (name) part-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Links for the bootstrap (name) part-->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js"></script>
        <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.4.0.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Modal-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
	</head>

	<body>
		<section>
			<?php
                include_once('nav.php');
            ?>


				<div class="container">
                    <h2>Endorsements</h2>
                    <div class="btn-group"> 

                        <button type="button" class="btn btn-info" id="sortname">Sort by Name</button>
                        <button type="button" class="btn btn-info" id="sortdate">Sort by Date</button>
                    </div>

                        <div class="etable">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody id="endorsTable" name="endorsTable">
                                </tbody>
                            </table>
                        </div>
                        <form class="myForm" id="myForm" name="myForm" method="post" action="endorsPost.php">
                            <div class="form-group">
                                <h4>Endorse Me Here<span class="glyphicon glyphicon-arrow-down"></span></h4>
                              <label for="usr">Name:</label>
                              <input type="text" value=""class="form-control" name="usr" id="usr" required=""/>
                            </div>
                            <div class="form-group"> 
                                <label for="date">Date:</label>
                                <br>
                                <input type="date" value="" class="form-control" name="usrdate" id="usrdate" required=""/>
                            </div>
                            <div class="form-group">
                              <label for="comment">Comment(s):</label>
                              <input type="text" value=""class="form-control" name="endorsecomment" id="endorsecomment" required=""/>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    
                    </div>
            
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you would like to submit endorsement?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="confirm" data-dismiss="modal">Confirm</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                            </div>

                        </div>
			</div>
               


			<footer>
				<p>
					Copyright © 2017 by Waylon Upshaw
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
                  $('#endorsements').addClass('active');
            </script>
        <script src="js/custom.js"></script>
	</body>
</html>
