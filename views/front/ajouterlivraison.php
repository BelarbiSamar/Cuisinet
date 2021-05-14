<?php

include 'C:/wamp64/www/Cuisinet/controller/livraisonC.php';
require_once 'C:/wamp64/www/Cuisinet/model/livraison.php';

$error="";
$livraison = new livraison();
$livraisonC= new livraisonC();
if(!empty($_POST["idLivraison"]) && !empty($_POST["idCommande"]) && !empty($_POST["idLivreur"]) && !empty($_POST["adresseLivraison"]) 
&& !empty($_POST["dureeLivraison"])&& !empty($_POST["idClient"]))
{if(isset($_POST["idLivraison"]) && isset($_POST["idCommande"]) && isset($_POST["idLivreur"]) && isset($_POST["adresseLivraison"]) 
&& isset($_POST["dureeLivraison"]) && isset($_POST["idClient"]) && isset($_POST["Ajouter"]) )
{
    $livraison->idLivraison=$_POST['idLivraison'];
    $livraison->idCommande=$_POST['idCommande'];
    $livraison->idLivreur=$_POST['idLivreur'];
    $livraison->adresseLivraison=$_POST['adresseLivraison'];
    $livraison->dureeLivraison=$_POST['dureeLivraison'];
    $livraison->idClient=$_POST['idClient'];
    
    

    $livraisonC->ajouterlivraison($livraison);


}
}else 
{
    $error= " Missing information ";
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
							<li class="nav-item active"><a class="nav-link" href="index.html#promo">Promo</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
									
									<li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item active"><a class="nav-link" href="events.html">Events</a></li>
						    <li class="nav-item active"><a class="nav-link" href="login.html">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="recipes.html">Recipes</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
    <section class="banner-area">
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
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/cuisine.png" alt="">
								</div>
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
          <div class="right_col" role="main" >
            <!-- top tiles -->
           <table class="table">

           <div id="error"> <?php echo "$error"?></div>

              
             <form name="formajout" id="formajout" class="form" action="ajouterlivraison.php" method="POST" >
             <tr>
             <td colspan="2">
              <input type="hidden" name="photo" >
            </td>
           </tr>
          
          <td>id Livraison : </td><td><input type="text" name="idLivraison" id="idLivraison" class="form-control" > </td>
          </tr>
          <tr><td>id Commande : </td><td><input type="text" name="idCommande" id="idCommande" class="form-control"  > </td>
          </tr>
          <tr><td>id Livreur : </td><td><input type="text" name="idLivreur" id="idLivreur" class="form-control" > </td>
          </tr>
           <tr><td>nadresse Livraison	 : </td><td><input type="text" id="adresseLivraison" name="adresseLivraison" class="form-control"  > </td>
          </tr>
          <tr><td>duree Livraison : </td><td><input type="text" name="dureeLivraison" id="dureeLivraison" class="form-control"  > </td></tr>
          </tr>
          <tr><td>id Client : </td><td><input type="text" name="idClient" id="idClient" class="form-control"  > </td></tr>
          </tr>
              <tr>
                  <td colspan="2">  <button type="submit" class="form-control" name="Ajouter" >
                                              ajouter
                                          </button></td>
              </tr>
              <tr>
                  <td colspan="2">  <button type="submit" class="form-control" name="verif" onclick="test()" >
                                              vérifier les données
                                          </button></td>
              </tr>
             </form>
               
           </table>
           </div>
          
                    </div>
                  </div>
                </div>
              </div>
                

			  <div class="checkout_btn_inner d-flex align-items-center">
                                        
                                        <a class="gray_btn" href="cart.html">return</a>
                                    </div>