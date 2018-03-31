
<html>
	<head>
		<title>Home</title>
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
            <h2>RENT A CAR!</h2>    
                <div>
                    <h2>Products</h2>            
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Product ID</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php

                            $database = 'Cars';
                            $link = mysqli_connect('localhost','jared','camaro182', $database);
                       
                            $result = mysqli_query($link, "SELECT * FROM Products");
                       
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "</tr>";
                            }
                        ?>
                    </tbody>
                  </table>
                </div>
            
                
            <h3>Rent a Car</h3>
            <form action="rent.php" method="POST">
                <label>Your Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" 
                value="<?php echo $info['name'] ?>" required=""/>
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" 
                value="<?php echo $info['email'] ?>" required=""/>
                <label>Car You Would Like To Rent</label>
                <input type="text" name="car" id="car" class="form-control" placeholder="Car" 
                value="<?php echo $info['car'] ?>" required=""/>
                <label>Date You Would Like To Rent</label>
                <input type="text" name="date" id="date" class="form-control" placeholder="Date" 
                value="<?php echo $info['date'] ?>" required=""/>

            
                <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                <br>
                </form>          
            
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
