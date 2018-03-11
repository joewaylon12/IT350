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
            <h2>WELCOME!</h2>
            
            <form action='logout.php'><button class="btn btn-info" type='submit'>LOGOUT</button></form>
            <br>
            <h3>Add Product</h3>
            <form action="addProduct.php" method="POST">
                <label>Name of product:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" 
                value="<?php echo $info['name'] ?>" required=""/>

                <label>price:</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Price" 
                value="<?php echo $info['price'] ?>" required=""/> 
                
                <label>Product Description:</label>
                <textarea class="form-control" id="description" name="description" rows="5" required=""></textarea>

                <br>
                    <button type="submit" class="btn btn-success">Add Product</button>
                <br>
                </form>
            
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
            
                <h3>Edit Product</h3>
                    <form action="editProduct.php" method="POST">
                        <label>Product ID:</label>
                        <input type="number" name="id" id="id" class="form-control" placeholder="Product ID" 
                        value="<?php echo $info['id'] ?>" required=""/>
                        
                        <label>Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Price" 
                        value="<?php echo $info['name'] ?>" required=""/>

                        <label>price:</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Price" 
                        value="<?php echo $info['price'] ?>" required=""/> 

                        <label>Product Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required=""></textarea>

                        <br>
                            <button type="submit" class="btn btn-success">Edit Product</button>
                        <br>
                    </form>
            
                <div>
                    <h2>Sales</h2>            
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Total Sales</th>
                        <th>Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>100</td>
                        <td>$10,000.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>    
            
                <div>
                    <h2>Customers</h2>            
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                      </tr>
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                      </tr>
                      <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                      </tr>
                    </tbody>
                  </table>
                </div>    
             <br>
            <h3>Blog</h3>
            <form action="addBlog.php" method="POST">
                <label>What's going on today?</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" 
                value="<?php echo $info['name'] ?>" required=""/>

                <label>Text</label>
                <textarea class="form-control" id="text" name="text" rows="5" required=""></textarea>

                <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                <br>
                </form>       
            
            <div>
                <h2>Your Past Blogs</h2>            
              <table class="table">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Subject</th>
                    <th>Text</th>
                  </tr>
                </thead>
                <tbody>
                 <?php

                            $database = 'Cars';
                            $link = mysqli_connect('localhost','jared','camaro182', $database);
                       
                            $result = mysqli_query($link, "SELECT * FROM Blog");
                       
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['text'] . "</td>";
                            echo "</tr>";
                            }
                ?>
                </tbody>
              </table>
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
