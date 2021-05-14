<?PHP

include 'C:\wamp64\www\Cuisinet\controller\pointsrelaisC.php';
include_once 'C:\wamp64\www\Cuisinet\model\pointsrelais.php';

$pointsrelaisC=new pointsrelaisC();
if(isset($_GET['trier']))
{
  $listepointsrelais=$pointsrelaisC->Trierpointsrelais($_GET['champs'],$_GET['ordre']);
}else if(isset($_GET['chercher'])&&isset($_GET['search'])){
  $listepointsrelais=$pointsrelaisC->chercherpointsrelais($_GET['chercher'],$_GET['champs'],$_GET['ordre']);
}else{
$listepointsrelais=$pointsrelaisC->afficherpointsrelais();
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


<div class="right_col" role="main">
            <!-- top tiles -->
            <table id="myTable" > 
              <tr>
              <form method="GET" action="afficherpointsrelais.php">
                <td>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="chercher">
                   <span class="input-group-btn">
                   <button class="btn btn-search" type="submit" name="search"><i class="fa fa-search fa-fw"></i> Search</button>
                   </span>
                  </div>
                </td>
                <td>
                    <select name="champs" class="form-control" style="margin-top: -10px;">
                      <option selected>idRelais</option>
                      <option>adresseRel</option>
                      <option>etatRel</option>
                      <option>horaire</option>
                      <option>conges</option>
                                
                    </select>
                 </td>
  
                 <td>
                  <div style="margin-left: 15px;">
                 <input type="radio" name="ordre" value="ASC"
                 checked>
                 <label for="huey">ordre croissant</label>
                 </div>
                 </td>
   
                 <td>
                  <div style="margin-left: 15px;">
                 <input type="radio" name="ordre" value="DESC">
                 <label for="huey">ordre décroissant</label>
                 <button class="btn btn-search" type="submit" name="trier"><i class="fa fa-search fa-fw"></i> trier</button>
                 </div>
                 </td>
               </form>
               </tr>
            </table>
  
          <table class="table">
              <thead>
                  <th> idRelais </th>
                  <th>adresseRel</th>
                  <th>etatRel</th>
                  <th>horaire</th>
                  <th>conges</th>
                  
                  <th>Operation </th>
              </thead>
              <?php
              foreach ($listepointsrelais as $pointsrelaisC){
              ?>
              <tr>
                  <td><?php echo $pointsrelaisC['idRelais']; ?></td>
              <td><?php echo $pointsrelaisC['adresseRel']; ?>  </td>
              <td><?php echo $pointsrelaisC['etatRel']; ?></td>
               <td><?php echo $pointsrelaisC['horaire']; ?></td>
               <td><?php echo $pointsrelaisC['conges']; ?></td>
              
               
                  
                  <td>
                    <a href="supprimerpointsrelais.php?idRelais=<?php echo $pointsrelaisC['idRelais']; ?>">Supprimer ce point relai</a>
                  </td>
              </tr>
              <?php
              }
                ?>
          </table>
           </div>
           <div class="checkout_btn_inner d-flex align-items-center">
                                        
                                            <a class="gray_btn" href="checkout.html">return</a>
                                        </div>
                   
                </div>
              </div>
            