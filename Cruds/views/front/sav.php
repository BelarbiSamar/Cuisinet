<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['description'])
    ) {
        $date = date('d-m-y h:i:s');
        $description = $_POST['description'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO reclamation(idReclamation, dateRec, idClient, description) values(?, ?, 1, ?)";
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sss", $id, $date, $description);
            if ($stmt->execute()) {
            } else {
                echo $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        die();
    }
}

if (isset($_POST['submit2'])) {
    if (
        isset($_POST['daterep'])
    ) {
        $date = $_POST['daterep'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO reparation(idReparation, delai_intervention) values(?, ?)";
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ss", $id, $date);
            if ($stmt->execute()) {
            } else {
                echo $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        die();
    }
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
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" width="100" height="100"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
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
                            <li class="nav-item"><a class="nav-link" href="sav.php">CS</a></li>
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
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
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

    <div class="row">
        <div class="col-2">
            <form class="jotform-form" action="sav.php" method="POST" name="form_211202533002533" id="211202533002533" accept-charset="utf-8" autocomplete="on">
                <div role="main" class="form-all">
                    <ul class="form-section page-section">
                        <li>
                            <h2>Complaint</h2>
                        </li>
                        <li class="form-line jf-required" data-type="control_textarea" id="id_6">
                            <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
                                Comment
                                <span class="form-required">
                                    *
                                </span>
                            </label>
                            <div id="cid_6" class="form-input jf-required">
                                <textarea id="input_6" class="form-textarea validate[required]" name="description" cols="40" rows="6" data-component="textarea" aria-labelledby="label_6"></textarea>
                            </div>
                        </li>
                        <li>
                            <input type="submit" value="Submit" name="submit" class="btn">
                        </li>
                        <script>
                            function verif() {
                                if (document.getElementById("input_6").value == "") {
                                    alert('Please Input A Valid Description.');
                                }
                            }
                        </script>
                        <li>
                            <button type="button" class="btn" onclick="verif()">
                                Verify
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="col-2">
            <form class="jotform-form" action="sav.php" method="POST" name="form_211202533002533" id="211202533002533" accept-charset="utf-8" autocomplete="on">
                <div role="main" class="form-all">
                    <ul class="form-section page-section">
                        <li>
                            <h2>Reparation</h2>
                        </li>
                        <li class="form-line" id="id_5">
                            <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
                                Date De Reparation
                                <span class="form-required">
                                    *
                                </span>
                            </label>
                            <div id="cid_5" class="form-input jf-required">
                                <input type="date" id="input_5" name="daterep" class="form-textbox" size="30" />
                            </div>
                        </li>
                        <li>
                            <input type="submit" value="Submit" name="submit2" class="btn">
                        </li>
                        <script type="text/javascript">
                            function verifydate(date1, date2) {
                                dt1 = new Date(date1);
                                dt2 = new Date(date2);
                                return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                            }

                            function ok() {
                                var today = new Date();
                                var dd = String(today.getDate()).padStart(2, '0');
                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                var yyyy = today.getFullYear();

                                today = mm + '/' + dd + '/' + yyyy;
                                A = document.getElementById("input_5").value;
                                if (A == "") {
                                    alert('Please input date');
                                }
                                console.log(verifydate(today, A));
                                if (verifydate(today, A) < 1) {
                                    alert('Invalid date');
                                } else if (verifydate(today, A) >= 1) {
                                    alert('Valid date');
                                }
                            }
                        </script>
                        <li>
                            <button type="button" class="btn" onclick="ok()">
                                Verify
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

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
                <p class="footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved </a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
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