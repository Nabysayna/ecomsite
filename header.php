<?php 

    header('Access-Control-Allow-Origin: *');

    require 'remoteDataAccess.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $daoInstance = new RemoteDataAccess();

    $result = $daoInstance->getCategories();
    $categorieImg = [] ;
    $categorieName = [] ;
    $i = 0 ;
    foreach ($result as $categorie) {
        $categorieImg[$i] = $categorie["detailCategorie"] ;
        $categorieName[$i] = $categorie["categorie"] ;
        $i++ ;
    }

    $rowNumber = 0 ;

    if( sizeof($categorieImg)%4==0 )
        $rowNumber = $rowNumber + (sizeof($categorieImg)/4) ;
    else
        $rowNumber = $rowNumber + (sizeof($categorieImg)/4) + 1 ;
?>

<!DOCTYPE html>
<!-- saved from url=(0059) -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en" style="">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Accueil || MoyLolou</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="./index_files/bootstrap.min.css">
        
        <!-- Nivo slider CSS
		============================================ -->
		<link rel="stylesheet" type="text/css" href="./index_files/nivo-slider.css" media="screen">	
        <link rel="stylesheet" type="text/css" href="./index_files/preview.css" media="screen">
		
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="./sunustyle/font-awesome/css/font-awesome.min.css">          
        <!-- material iconic CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/material-design-iconic-font.css">
        <link rel="stylesheet" href="./index_files/material-design-iconic-font.min.css">
                        
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/owl.carousel.css">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/jquery-ui.css">
        
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/meanmenu.min.css">
        
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/animate.css">
 
        <!-- Color Switcher CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/color.css">
        <link rel="stylesheet" href="./index_files/color-switcher.css">
          
        <!-- Animate headline CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/animate-heading.css">
        <link rel="stylesheet" href="./index_files/reset.css">
        
		<!-- Video CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/jquery.mb.YTPlayer.css">
        
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/style.css">
        
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="./index_files/responsive.css">

        <link rel="stylesheet" href="./sunustyle/w3.css">
        
		<!-- modernizr JS
		============================================ -->		

        <!-- Color Css Files Start -->
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-one.css" title="color-one" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-two.css" title="color-two" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-three.css" title="color-three" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-four.css" title="color-four" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-five.css" title="color-five" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-six.css" title="color-six" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-seven.css" title="color-seven" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-eight.css" title="color-eight" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-nine.css" title="color-nine" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-ten.css" title="color-ten" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/color-ten.css" title="color-ten" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/pattren1.css" title="pattren1" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/pattren2.css" title="pattren2" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/pattren3.css" title="pattren3" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/pattren4.css" title="pattren4" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/pattren5.css" title="pattren5" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/background1.css" title="background1" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/background2.css" title="background2" media="screen">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/background3.css" title="background3" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/background4.css" title="background4" media="screen" disabled="">
        <link rel="alternate stylesheet" type="text/css" href="./index_files/background5.css" title="background5" media="screen" disabled="">

        <link rel="stylesheet" type="text/css" href="./sunustyle/personalize.css">


        <script src="./js/jquery3-2-1.min.js"></script>
        <script src="./js/bootstrap3-3-7.min.js"></script>

        <body style="">
        <!-- Pre Loader
        ============================================ -->
        <div class="preloader" style="display: none;">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!--[if lt IE 8]>
            <p class="browserupgrade">Vous utilisez une version Internet Explorer qui <strong>n'est pas à jour</strong>. S'il vous plaît <a href="http://browsehappy.com/">Mettez à niveau votre navigateur</a> pour améliorer votre expérience utilisateur.</p>
        <![endif]-->

        <div class="as-mainwrapper wrapper-boxed">
            <div class="bg-white">
                <!-- header start -->
                <header class="header-area">
                    <div class="header-top-area ptb-10 hidden-sm hidden-xs">
                        <div class="container">
                            <div class="row">
                               <div class="col-md-4">
                                    <div class="account-usd text-left">
                                        <ul>
                                            <li><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu-mainmenu">
                                                    <li><a href="#"><i class="fa fa-circle"></i>Login</a></li>
                                                    <li><a href="#"><i class="fa fa-circle"></i>My Account</a></li>
                                                    <li><a href="#"><i class="fa fa-circle"></i>My Wishlist</a></li>
                                                    <li><a href="#"><i class="fa fa-circle"></i>My Cart</a></li>
                                                    <li><a href="#"><i class="fa fa-circle"></i>Checkout</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="social-icons text-center">
                                       <ul>
                                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                    <div class="top-right">
                                        <div class="top-login-cart">
                                            <ul>
                                                <li class=" hidden-xs"><a href="#">Login or Register</a></li>
                                                <li class=" hidden-xs"><a href="#">Checkout</a></li>
                                                <li><a href="#"><img src="./index_files/cart_red.png" alt="cart">Panier (3)</a>
                                                    <ul class="submenu-mainmenu">
                                                        <li class="single-cart-item clearfix">
                                                            <span class="cart-img">
                                                                <a href="#"><img src="./index_files/1.jpg" alt=""></a>
                                                            </span>
                                                            <span class="cart-info">
                                                                <a href="#">Eletria ostma</a>
                                                                <span>$150 x 2</span>
                                                            </span>
                                                            <span class="trash-cart">
                                                                <a href="#"><i class="fa fa-trash-o"></i></a>
                                                            </span>    
                                                        </li>
                                                        <li class="single-cart-item clearfix">
                                                            <span class="cart-img">
                                                                <a href="#"><img src="./index_files/2.jpg" alt=""></a>
                                                            </span>
                                                            <span class="cart-info">
                                                                <a href="#">Celletria ostma</a>
                                                                <span>$120 x 1</span>
                                                            </span>
                                                            <span class="trash-cart">
                                                                <a href="#"><i class="fa fa-trash-o"></i></a>
                                                            </span>    
                                                        </li>
                                                        <li class="single-cart-item clearfix">
                                                            <span class="cart-img">
                                                                <a href="#"><img src="./index_files/3.jpg" alt=""></a>
                                                            </span>
                                                            <span class="cart-info">
                                                                <a href="#">Pelletria ostma</a>
                                                                <span>$100 x 2</span>
                                                            </span>
                                                            <span class="trash-cart">
                                                                <a href="#"><i class="fa fa-trash-o"></i></a>
                                                            </span>    
                                                        </li>
                                                        <li>
                                                            <span class="sub-total-cart text-center">
                                                                Sub Total <span>$620</span>
                                                                <a href="#" class="view-cart active">View Cart</a>
                                                                <a href="#" class="view-cart">Checkout</a>
                                                            </span>
                                                        </li>    
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>    
                               </div>
                            </div>
                        </div>   
                    </div>


                    <div class="logo-info-area ptb-35">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="header-logo">
                                        <a href=""><img src="./index_files/1.png" alt="shofixe"></a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10 hidden-sm hidden-xs">

                                    <div class="mainmenu-area text-center hidden-sm hidden-xs">
                                        <nav>
                                            <div class="mainmenu">
                                                <ul>
                                                    <li><a href="">Accueil</a>
                                                    </li>

                                                    <li><a href="">Catégories</a>

                                                         <div class="mega-menu two">
                                                            <?php
                                                                $k = 0 ;
                                                                for($i=1 ; $i<=$rowNumber ; $i++){
                                                                    echo '<div class="row megamenurow">' ;
                                                                    for($j=$k ; $j<$k+4 ; $j++){
                                                                        if( isset($categorieImg[$j]) ){
                                                                        echo ' <div class="col-sm-3" ><a href="#" ><img class="card-img-top" src="./index_files/'.$categorieImg[$j].'" alt="Card image cap"><div class="card-block"><h4 style="text-align: center ;">'.$categorieName[$j].'</h4><p class="card-text"></p></div></a></div> ' ;    
                                                                        }
                                                                    }                                                        
                                                                    echo '</div>' ;
                                                                    $k = $k+4 ;
                                                                }
                                                            ?>
                                                  </div>

                                                    </li>
                                                    <li class="shop"><a href="#">Boutiques</a>
                                                        <ul class="submenu-mainmenu">
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop Grid Left Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop Grid Right Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop List Left Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop List Right Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Product Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="shop"><a href="#">Petites Annonces</a>
                                                        <ul class="submenu-mainmenu">
                                                            <li><a href="http://devitems.com/html/shofixe-preview/shofixe/shop.html"><i class="fa fa-circle"></i>Shop</a></li>
                                                            <li><a href="http://devitems.com/html/shofixe-preview/shofixe/shop-grid-left-sidebar.html"><i class="fa fa-circle"></i>Shop Grid Left Sidebar</a></li>
                                                            <li><a href="http://devitems.com/html/shofixe-preview/shofixe/shop-grid-right-sidebar.html"><i class="fa fa-circle"></i>Shop Grid Right Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop List Left Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Shop List Right Sidebar</a></li>
                                                            <li><a href="#"><i class="fa fa-circle"></i>Product Details</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="#" data-toggle="modal" data-target="#myModal">Tracking</a></li>

                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </nav>                  
                                    </div>    

                                </div>

                             </div>
                        </div>
                    </div>

                    <!-- Mobile Menu Area start -->    <!-- href="#nav" --> 
                    <div class="mobile-menu-area">
                        <div class="container mean-container"><div class="mean-bar"><a data-toggle="collapse" data-target="#demo" class="meanmenu-reveal" style="background:;color:;right:0;left:auto;"><span></span><span></span><span></span></a>
                            <nav class="mean-nav collapse" id="demo">
                                            <ul style="display: none;">
                                                <li><a href="index.html">HOME</a>
                                                    <ul style="display: none;">
                                                        <li><a href="index.html">Home Slider One</a></li>
                                                        <li><a href="index-2.html">Home Slider Two</a></li>
                                                        <li><a href="index-3.html">Home Fixed Image</a></li>
                                                        <li><a href="index-4.html">Home Animated Text</a></li>
                                                        <li><a href="index-15.html">Home Video Background One</a></li>
                                                        <li><a href="index-16.html">Home Video Background Two</a></li>
                                                        <li><a href="index-17.html">Home Parallax Background One</a></li>
                                                        <li><a href="index-18.html">Home Parallax Background Two</a></li>
                                                        <li><a href="index-5.html">Home Rotate Text One</a></li>
                                                        <li><a href="index-6.html">Home Rotate Text Two</a></li>
                                                        <li><a href="index-7.html">Home Rotate Text Three</a></li>
                                                        <li><a href="index-8.html">Home Rotate Text Four</a></li>
                                                        <li><a href="index-9.html">Home Rotate Text Five</a></li>
                                                        <li><a href="index-10.html">Home Rotate Text Six</a></li>
                                                        <li><a href="index-11.html">Home Rotate Text Seven</a></li>
                                                        <li><a href="index-12.html">Home Rotate Text Eight</a></li>
                                                        <li><a href="index-13.html">Home Rotate Text Nine</a></li>
                                                        <li><a href="index-14.html">Home Rotate Text Ten</a></li> 
                                                        <li><a href="index-23.html">Rotate Text 11</a></li> 
                                                        <li><a href="index-24.html">Rotate Text 12</a></li> 
                                                        <li><a href="index-19.html">Box Layout 1</a></li> 
                                                        <li><a href="index-20.html">Box Layout 2</a></li> 
                                                        <li><a href="index-21.html">Box Layout 3</a></li> 
                                                        <li><a href="index-22.html">Box Layout 4</a></li>
                                                    </ul>
                                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="slider-one.html">Features</a>
                                                    <ul style="display: none;">
                                                        <li><a href="slider-one.html">Slider One</a></li>
                                                        <li><a href="slider-two.html">Slider Two</a></li>
                                                        <li><a href="video-one.html">Video One</a></li>
                                                        <li><a href="video-two.html">Video Two</a></li>
                                                        <li><a href="parallax-one.html">Parallax One</a></li>
                                                        <li><a href="parallax-two.html">Parallax Two</a></li>
                                                        <li><a href="menu-default.html">Menu Style One</a></li>
                                                        <li><a href="menu-style-two.html">Menu Style Two</a></li>
                                                        <li><a href="menu-style-three.html">Menu Style Three</a></li>
                                                        <li><a href="menu-style-four.html">Menu Style Four</a></li>
                                                        <li><a href="title-one.html">Title Style One</a></li>
                                                        <li><a href="title-two.html">Title Style Two</a></li>
                                                        <li><a href="title-three.html">Title Style Three</a></li>
                                                        <li><a href="title-four.html">Title Style Four</a></li>
                                                        <li><a href="title-five.html">Title Style Five</a></li>
                                                        <li><a href="footer-one.html">Footer Style One</a></li>
                                                        <li><a href="footer-two.html">Footer Style Two</a></li>
                                                        <li><a href="footer-three.html">Footer Style Three</a></li>
                                                        <li><a href="footer-four.html">Footer Style Four</a></li>
                                                    </ul>
                                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="shop.html">Shop</a>
                                                    <ul style="display: none;">
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">Shop grid right sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">Shop list left sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                    </ul>
                                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="shortcode-blog.html">shortcode</a>
                                                    <ul style="display: none;">
                                                        <li><a href="shortcode-alert.html">Alert</a></li>
                                                        <li><a href="shortcode-blog.html">Blog</a></li>
                                                        <li><a href="shortcode-breadcrumb.html">Breadcrumb</a></li>
                                                        <li><a href="shortcode-button.html">Button</a></li>
                                                        <li><a href="shortcode-client.html">Client</a></li>
                                                        <li><a href="shortcode-contact.html">Contact</a></li>
                                                        <li><a href="shortcode-dropdown.html">dropdown</a></li>
                                                        <li><a href="shortcode-newsletter.html">newsletter</a></li>
                                                        <li><a href="shortcode-product.html">product</a></li>
                                                        <li><a href="shortcode-map.html">map</a></li>
                                                        <li><a href="shortcode-offer.html">offer</a></li>
                                                        <li><a href="shortcode-pagination.html">pagination</a></li>
                                                        <li><a href="shortcode-progressbar.html">progressbar</a></li>
                                                        <li><a href="shortcode-service.html">service</a></li>
                                                        <li><a href="shortcode-testimonial.html">testimonial</a></li>
                                                        <li><a href="shortcode-slider-bottom.html">slider bottom</a></li>
                                                        <li><a href="shortcode-off-banner.html">off banner</a></li>
                                                        <li><a href="shortcode-featured.html">featured</a></li>
                                                    </ul>
                                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="cart.html">Pages</a>
                                                    <ul style="display: none;">
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li class="mean-last"><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <div class="mean-push"></div><nav id="dropdown" style="display: none;">
                                            <ul>
                                                <li><a href="index.html">HOME</a>
                                                    <ul>
                                                        <li><a href="index.html">Home Slider One</a></li>
                                                        <li><a href="index-2.html">Home Slider Two</a></li>
                                                        <li><a href="index-3.html">Home Fixed Image</a></li>
                                                        <li><a href="index-4.html">Home Animated Text</a></li>
                                                        <li><a href="index-15.html">Home Video Background One</a></li>
                                                        <li><a href="index-16.html">Home Video Background Two</a></li>
                                                        <li><a href="index-17.html">Home Parallax Background One</a></li>
                                                        <li><a href="index-18.html">Home Parallax Background Two</a></li>
                                                        <li><a href="index-5.html">Home Rotate Text One</a></li>
                                                        <li><a href="index-6.html">Home Rotate Text Two</a></li>
                                                        <li><a href="index-7.html">Home Rotate Text Three</a></li>
                                                        <li><a href="index-8.html">Home Rotate Text Four</a></li>
                                                        <li><a href="index-9.html">Home Rotate Text Five</a></li>
                                                        <li><a href="index-10.html">Home Rotate Text Six</a></li>
                                                        <li><a href="index-11.html">Home Rotate Text Seven</a></li>
                                                        <li><a href="index-12.html">Home Rotate Text Eight</a></li>
                                                        <li><a href="index-13.html">Home Rotate Text Nine</a></li>
                                                        <li><a href="index-14.html">Home Rotate Text Ten</a></li> 
                                                        <li><a href="index-23.html">Rotate Text 11</a></li> 
                                                        <li><a href="index-24.html">Rotate Text 12</a></li> 
                                                        <li><a href="index-19.html">Box Layout 1</a></li> 
                                                        <li><a href="index-20.html">Box Layout 2</a></li> 
                                                        <li><a href="index-21.html">Box Layout 3</a></li> 
                                                        <li><a href="index-22.html">Box Layout 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="slider-one.html">Features</a>
                                                    <ul>
                                                        <li><a href="slider-one.html">Slider One</a></li>
                                                        <li><a href="slider-two.html">Slider Two</a></li>
                                                        <li><a href="video-one.html">Video One</a></li>
                                                        <li><a href="video-two.html">Video Two</a></li>
                                                        <li><a href="parallax-one.html">Parallax One</a></li>
                                                        <li><a href="parallax-two.html">Parallax Two</a></li>
                                                        <li><a href="menu-default.html">Menu Style One</a></li>
                                                        <li><a href="menu-style-two.html">Menu Style Two</a></li>
                                                        <li><a href="menu-style-three.html">Menu Style Three</a></li>
                                                        <li><a href="menu-style-four.html">Menu Style Four</a></li>
                                                        <li><a href="title-one.html">Title Style One</a></li>
                                                        <li><a href="title-two.html">Title Style Two</a></li>
                                                        <li><a href="title-three.html">Title Style Three</a></li>
                                                        <li><a href="title-four.html">Title Style Four</a></li>
                                                        <li><a href="title-five.html">Title Style Five</a></li>
                                                        <li><a href="footer-one.html">Footer Style One</a></li>
                                                        <li><a href="footer-two.html">Footer Style Two</a></li>
                                                        <li><a href="footer-three.html">Footer Style Three</a></li>
                                                        <li><a href="footer-four.html">Footer Style Four</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">Shop grid right sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">Shop list left sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shortcode-blog.html">shortcode</a>
                                                    <ul>
                                                        <li><a href="shortcode-alert.html">Alert</a></li>
                                                        <li><a href="shortcode-blog.html">Blog</a></li>
                                                        <li><a href="shortcode-breadcrumb.html">Breadcrumb</a></li>
                                                        <li><a href="shortcode-button.html">Button</a></li>
                                                        <li><a href="shortcode-client.html">Client</a></li>
                                                        <li><a href="shortcode-contact.html">Contact</a></li>
                                                        <li><a href="shortcode-dropdown.html">dropdown</a></li>
                                                        <li><a href="shortcode-newsletter.html">newsletter</a></li>
                                                        <li><a href="shortcode-product.html">product</a></li>
                                                        <li><a href="shortcode-map.html">map</a></li>
                                                        <li><a href="shortcode-offer.html">offer</a></li>
                                                        <li><a href="shortcode-pagination.html">pagination</a></li>
                                                        <li><a href="shortcode-progressbar.html">progressbar</a></li>
                                                        <li><a href="shortcode-service.html">service</a></li>
                                                        <li><a href="shortcode-testimonial.html">testimonial</a></li>
                                                        <li><a href="shortcode-slider-bottom.html">slider bottom</a></li>
                                                        <li><a href="shortcode-off-banner.html">off banner</a></li>
                                                        <li><a href="shortcode-featured.html">featured</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="cart.html">Pages</a>
                                                    <ul>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu Area end -->		   
                </header>


        <!-- START TRACKING MODAL -->

            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">TRACKING COMMANDE</h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Entrez votre code de suivi ici ..." name="name">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  </div>
                </div>

              </div>
            </div>

        <!-- END TRACKING MODAL -->