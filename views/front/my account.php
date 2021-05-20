<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: http://localhost/client/views/front/index.html');
   }

?>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/logo.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>CuisiNet</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" width="100" height="100"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="produitafficher.php">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item active"><a class="nav-link" href="events.php">Events</a></li>
						    <li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="recipes.php">Recipes</a></li>
							<li class="nav-item"><a class="nav-link" href="sav.php">CS</a></li>
							<li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false" >my account</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="#myinformations">my informations</a></li>
									<li class="nav-item"><a class="nav-link" href="#mycard">my card</a></li>
									<li class="nav-item"><a class="nav-link" href="#myorder">my order</a></li>
									<li class="nav-item"><a class="nav-link" href="#mydelivery">my delivery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#mycomplaint">my complaint</a></li>
                                    <li class="nav-item"><a class="nav-link" href="deconnexion.php">logout</a></li>
								</ul>
                            
                            </li>
                            
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Welcome to our <br>CuisiNet</h1>
									<p>...</p>
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/cuisine.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/cuisine.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <div class="right_col" role="main">
                        <!-- top tiles -->
                        
                        <table >
                            <tr>
                                
                            </tr>
                            
                            <br><br><br><br><br><br><br><br>
                            <h1 id="myinformations" style="color: black; size: 20px;"></h1>
<br><br><br><br><br><br>
<h1>my informations</h1>
                            <?PHP
                            include_once 'C:/xampp/htdocs/client/model/Utilisateur.php';
                            include_once 'C:/xampp/htdocs/client/controller/UtilisateurC.php';
                            $email=$_SESSION['e'];
                            $pass=$_SESSION['p'];
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "pl";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $query = "SELECT * FROM utilisateur where Email='" . $email . "' and Password = '". $pass."'"; //You don't need a ; like you do in SQL
                            $result = $conn->query($query);

                            $row = $result->fetch_row();
                            echo "<table class=\"table\" id=\"myTable\">"; // start a table tag in the HTML
                            echo "<tr>";
                            echo "<th>mon identifiant</th>";
                            echo "<th>nom</th>";
                            echo "<th>prenom</th>";                         
                            echo "<th>email</th>";
                      
                        
                          
                            echo "<th>mot de passe</th></tr>";

                            $_SESSION['idneeded']=$row[0];
                               ?>
                                  <tr>
                                    <td><?php echo $row[0]; ?></td>
                                
                                <td><?php echo $row[1]; ?></td>
                                 <td><?php echo $row[2]; ?></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[5]; ?></td>
                                    
                                   
                                </tr>
                                  
                           
                        </table>
                    </div>
                        
                    

                    <table >
                            <tr>
                                
                            </tr>
                            
                            <br><br><br><br><br><br><br><br>
                            <h1 id="mycard" style="color: black; size: 20px;"></h1>
<br><br><br><br><br><br>
<h1 >my card</h1>
                            <?PHP
                            include_once 'C:/xampp/htdocs/client/model/Utilisateur.php';
                            include_once 'C:/xampp/htdocs/client/controller/UtilisateurC.php';
                            $idneeded=$_SESSION['idneeded'];
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "pl";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $query = "SELECT * FROM carte where idClient='" . $idneeded . "'"; //You don't need a ; like you do in SQL
                            $result = $conn->query($query);

                            $row = $result->fetch_row();
                            echo "<table class=\"table\" id=\"myTable\">"; // start a table tag in the HTML
                            echo "<tr>";
                            echo "<th>identifiant de la carte</th>";
                            echo "<th>mon identifiant</th>";
                            echo "<th>type de la carte</th>";
                            echo "<th>nombre de points</th>";                         
                            echo "<th>date d'emmission</th>";
                            
                      
                        
                          
                            echo "<th>date d'expiration</th></tr>";
                               ?>
                                  <tr>
                                    <td><?php echo $row[0]; ?></td>
                                
                                <td><?php echo $row[1]; ?></td>
                                 <td><?php echo $row[2]; ?></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                                 <td><?php echo $row[5]; ?></td>
                                 
                                   
                                </tr>
                                  
                           
                        </table>

                        <table >
                            <tr>
                                
                            </tr>
                            
                            <br><br><br><br><br><br><br><br>
                            <h1 id="myorder" style="color: black; size: 20px;"></h1>
<br><br><br><br><br><br>
<h1 >my order</h1>
                            <?PHP
                            
                            $idneeded=$_SESSION['idneeded'];
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "pl";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $query = "SELECT * FROM commande where idClient='" . $idneeded . "'"; //You don't need a ; like you do in SQL
                            $result = $conn->query($query);

                            $row = $result->fetch_row();
                            echo "<table class=\"table\" id=\"myTable\">"; // start a table tag in the HTML
                            echo "<tr>";
                            echo "<th>identifiant de la commande</th>";
                            echo "<th>date de la commande</th>";
                            echo "<th>nombre d'article</th>";
                            echo "<th>mon identifiant</th>";                         
                            echo "<th>identifiant du produit</th>";
                            
                      
                        
                          
                            echo "</tr>";
                               ?>
                                  <tr>
                                    <td><?php echo $row[0]; ?></td>
                                
                                <td><?php echo $row[1]; ?></td>
                                 <td><?php echo $row[2]; ?></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                                 
                                 
                                   
                                </tr>
                                  
                           
                        </table>
	

                        </table>

<table >
    <tr>
        
    </tr>
    
    <br><br><br><br><br><br><br><br>
    <h1 id="mydelivery" style="color: black; size: 20px;"></h1>
<br><br><br><br><br><br>
<h1 >my delivery</h1>
    <?PHP
    
    $idneeded=$_SESSION['idneeded'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pl";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT * FROM livraison where idClient='" . $idneeded . "'"; //You don't need a ; like you do in SQL
    $result = $conn->query($query);

    $row = $result->fetch_row();
    echo "<table class=\"table\" id=\"myTable\">"; // start a table tag in the HTML
    echo "<tr>";
    echo "<th>identifiant de la livraison</th>";
    echo "<th>identifiant de la commande</th>";
    echo "<th>identifiant du livreur</th>";
    echo "<th>adresse de la livraison</th>";                         
    echo "<th>durée de la livraison</th>";
    echo "<th>mon identifiant</th>";
    


  
    echo "</tr>";
       ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
        
        <td><?php echo $row[1]; ?></td>
         <td><?php echo $row[2]; ?></td>
         <td><?php echo $row[3]; ?></td>
         <td><?php echo $row[4]; ?></td>
         <td><?php echo $row[5]; ?></td>
         
         
           
        </tr>
          
   
</table>



<table >
    <tr>
        
    </tr>
    
    <br><br><br><br><br><br><br><br>
    <h1 id="mycomplaint" style="color: black; size: 20px;"></h1>
<br><br><br><br><br><br>
<h1 >my complaint</h1>
    <?PHP
    
    $idneeded=$_SESSION['idneeded'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pl";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT * FROM reclamation where idClient='" . $idneeded . "'"; //You don't need a ; like you do in SQL
    $result = $conn->query($query);

    $row = $result->fetch_row();
    echo "<table class=\"table\" id=\"myTable\">"; // start a table tag in the HTML
    echo "<tr>";
    echo "<th>identifiant de la reclamation</th>";
    echo "<th>date de la reclamation</th>";
    echo "<th>mon identifiant</th>";
    echo "<th>description</th>";                         
    
    


  
    echo "</tr>";
       ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
        
        <td><?php echo $row[1]; ?></td>
         <td><?php echo $row[2]; ?></td>
         <td><?php echo $row[3]; ?></td>
         
         
           
        </tr>
          
   
</table>

	<br><br><br><br><br><br><br><br>
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							
						</p>
					</div>
				</div>
				
				
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>