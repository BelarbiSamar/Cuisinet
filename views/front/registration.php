<script  src="script.js"></script>
<?php

include 'C:/xampp/htdocs/client/controller/ClientC.php';
require_once 'C:/xampp/htdocs/client/model/Client.php';

$error="";
$Client = new Client();
$ClientC= new ClientC();

if(!empty($_POST["id"]) && !empty($_POST["cin"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) 
&& !empty($_POST["email"]) && !empty($_POST["adresse"]) && !empty($_POST["dateNaiss"]) &&!empty($_POST["password"]))
{
if(isset($_POST["id"]) && isset($_POST["cin"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) 
&& isset($_POST["email"]) && isset($_POST["adresse"]) && isset($_POST["dateNaiss"])&& isset($_POST["password"])&& isset($_POST["Ajouter"]))
{
    $Client->id=$_POST['id'];
    $Client->cin=$_POST['cin'];
    $Client->nom=$_POST['nom'];
    $Client->prenom=$_POST['prenom'];
    $Client->email=$_POST['email'];
    $Client->adresse=$_POST['adresse'];
    $Client->dateNaiss=$_POST['dateNaiss'];
    $Client->password=$_POST['password'];
   $ClientC->ajouterClient($Client);




   $usrid=$_POST['id'];
   $usrnom=$_POST['nom'];
   $usrprenom=$_POST['prenom'];
   $usrlogin=$_POST['cin'];
    $usremail=$_POST['email'];
	$usrpassword=$_POST['password'];

   $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pl";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
							if ($conn->connect_error) {
								die('Could not connect to the database.');
							} else {
								$Insert = "INSERT INTO utilisateur(id, nom, prenom, email,login,password) values('$usrid','$usrnom','$usrprenom','$usremail','$usrlogin','$usrpassword')";
								$stmt = $conn->prepare($Insert);
								if ($stmt->execute()) {
								} else {
									echo $stmt->error;
								}
								$stmt->close();
								$conn->close();
							}
}
}else 
{
    
    $error= " Missing informations ";
}


?>


<!DOCTYPE html>
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
	<!-- Meta Keyword -->#promo
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>CuisiNet</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
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

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the CuisiNet</p>
							
						</div>
					</div>	
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Create an Account</h3>
						<form class="row login_form" action="registration.php" method="POST" id="formajout" name="formajout" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="id" name="id" placeholder="identifiant" onfocus="this.placeholder = ''" onblur="this.placeholder = 'identifiant'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="cin" name="cin" placeholder="cin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'cin'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="nom" name="nom" placeholder="nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'nom'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'prenom'">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" onfocus="this.placeholder = ''" onblur="this.placeholder = 'adresse'">
							</div>
							<div class="col-md-12 form-group">
								<input type="date" class="form-control" id="dateNaiss" name="dateNaiss" placeholder="dateNaiss" onfocus="this.placeholder = ''" onblur="this.placeholder = 'dateNaiss'">
							</div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'">
							</div>
							
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">I accept the terms of use & privacy policy</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn" name="Ajouter">Register</button>
							</div>
							<div class="col-md-12 form-group">
								<button type=""  class="primary-btn" name="verif" onclick=" controlClient();">Check informations</button>
							</div>
						</form>
					</div>
					<?PHP
                            include_once 'C:/xampp/htdocs/client/model/Utilisateur.php';
                            include_once 'C:/xampp/htdocs/client/controller/UtilisateurC.php';
                            
                            

                           /* 
							$id=$_POST['id'];
							$login=$_POST['cin'];
							$nom=$_POST['nom'];
							$prenom=$_POST['prenom'];
							$email=$_POST['email'];
							$pass=$_POST['password'];
*/
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pl";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
							if ($conn->connect_error) {
								die('Could not connect to the database.');
							} else {
								$Insert = "INSERT INTO utilisateur(id, nom, prenom, email,login,password) values(123,'haw','haw','haw@gmail.com','haw','haw')";
								$stmt = $conn->prepare($Insert);
								if ($stmt->execute()) {
								} else {
									echo $stmt->error;
								}
								$stmt->close();
								$conn->close();
							} 






                               ?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	
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
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>