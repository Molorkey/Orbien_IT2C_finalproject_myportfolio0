<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo '<title>FoodKo</title>';
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline|Yanone+Kaffeesatz" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.aniview.js"></script>
	<script>
        $(document).ready(function(){
            $('.aniview').AniView();
        });
    </script>
	
	
  </head>
  
  
  
  
<body>

<section id="header" class="clearfix">
	<nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                echo '<a class="navbar-brand" href="index.php">FoodKo</a>';
                ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                	<?php
                    echo '<li><a class="tag_menu active_tab" href="index.php">HOME</a></li> ';                  
                    echo '<li><a class="tag_menu" href="about.php">ABOUT US</a></li>	';		                    
                    echo '<li><a class="tag_menu" href="blog.php">BLOG</a></li>';
                    echo '<li><a class="tag_menu" href="details.php">DETAILS</a></li>';			
					echo '<li><a class="tag_menu" href="shop.php">SHOP</a></li>';
                    echo '<li><a class="tag_menu" href="shop-details.php">SHOP DETAIL</a></li>';				
					echo '<li><a class="tag_menu" href="team.php">TEAM</a></li>';			
					echo '<li><a class="tag_menu" href="gallery.php">GALLERY</a></li>';		
					echo '<li><a class="tag_menu" href="pages.php">PAGES</a></li>';			
					echo '<li><a class="tag_menu" href="contact.php">CONTACT</a></li>';
					?>				
					<li class="dropdown">
					  <a class="tag_menu tag_menu_last" href="blog.php" data-toggle="dropdown" role="button" aria-expanded="false">MORE<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_1" role="menu">
					  	<?php
						echo '<li><a href="index.php">Home</a></li>';
						echo '<li><a href="about.php">ABOUT US</a></li>';
						echo '<li><a href="blog.php">BLOG</a></li>';
						echo '<li><a href="details.php">DETAILS</a></li>';
						echo '<li><a href="shop.php">SHOP</a></li>';
						echo '<li><a href="shop-details.php">Shop-detail</a></li>';
						echo '<li><a href="team.php">TEAM</a></li>		';										
						echo '<li><a href="gallery.php">Gallery</a></li>';
						echo '<li><a href="contact.php">CONTACT</a></li>';
						?>
					  </ul>
                    </li>
					
                </ul>
				 <ul class="nav navbar-nav navbar-right">
				   <li class="dropdown"><a href="#" class="top_tab dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Cart time<i class="fa fa-shopping-basket"></i></a>
                    <ul class="dropdown-menu drop_1" style="min-width: 300px;">
                        <li>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="navbar-form navbar-left" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                Go!</button>
                                        </span>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
				 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>

<section id="top" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="top clearfix">
    <div class="col-sm-12 top_main clearfix">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">

                        <?php echo '<img src="img/1.png" alt="First slide">';?>

                        
                    </div>
                    <div class="item">

                        <?php echo'<img src="img/2.png" alt="Second slide">'; ?>

                        
                    </div>
                    <div class="item">

                        <?php echo '<img src="img/3.png" alt="Third slide">'; ?>

                        
               
            </div>
            <div class="main-text">
                <div class="col-sm-12 top_bottom clearfix">
                    <?php echo'<h1>
                        Online<br><span class="drunk_1">Food</span><span class="drunk_2">Store</span></h1>'; ?>


                    <?php echo '<h3>
                        Shop with us now!
                    </h3>';?>

                    <div class="">
                        <a class="btn btn-clear btn-sm btn-min-block" href="details.php">shop now</a></div>
                </div>
            </div>
        </div>
   </div>
  </div>
 </div>
</section>

<section id="center_1" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="center_1 clearfix">
    <div class="center_1_top clearfix">
	 <h4><i class="fa fa-heart"></i></h4>
	 <?php
	 echo '<h2>Favorites</h2>';

	 echo '<h5>Pick anything you want</h5>';
	 ?>
	</div>
	<div class="center_1_middle clearfix">
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   				<?php
                     echo '<div class="img"><img src="img/4.png" alt="img"></div>';
                  ?>
                      <div class="info">
                      	<?php
                        echo '<h3>Add to Cart</h3>';
                        ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <?php
	  echo '<h3><a href="#">Sushi</a></h3>

	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 145.00</h6>';?>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   	<?php
                     echo '<div class="img"><img src="img/5.png" alt="img"></div>';
                      ?>
                      <div class="info">
                        <?php
                        echo '<h3>Add to Cart</h3>';
                        ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">Adobo</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 60.00</h6>';?>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   	<?php
                      echo '<div class="img"><img src="img/6.png" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>';
                        ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">Halo-Halo</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 75.00</h6>';?>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   				<?php
                      echo '<div class="img"><img src="img/7.png" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>';
                        ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">Chinese Noodles</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 120.00</h6>';?>
	 </div>
	 </div>
	</div>
	<div class="center_1_middle clearfix">
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   	<?php
                     echo  '<div class="img"><img src="img/8.png" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>'; ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">Dim Sum</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 45.00</h6>';?>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   	<?php
                      echo '<div class="img"><img src="img/9.png" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>'; ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">Steamed Dumpling</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 35.00</h6>'; ?>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   	<?php
                      echo '<div class="img"><img src="img/10.png" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>'; ?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">FoodKo Special Pizza</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 175.00</h6>'; ?>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
	   	<?php
                     echo  '<div class="img"><img src="img/11.png" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>';?>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  	<?php
	  echo '<h3><a href="#">Chicken Nuggets</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>PHP 95.00</h6>'; ?>
	 </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>








 
<section id="footer" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="footer clearfix">
    <div class="col-sm-4 footer_left clearfix">
    <?php
    echo
	 '<div class="footer_left_inner">
	  <h2>Our Contact Details</h2>
	  <h5><a href="#"><i class="fa fa-phone"></i>0-875-275-83945, 0-684-947-846454</a></h5>
	  <h5><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat 9.00 - 19.00 Sunday CLOSED</a></h5>
	  <h5><a href="#"><i class="fa fa-link"></i>Santol, Boac, Marinduque</a></h5>
	  
	 </div>
	</div>'; ?>
	<div class="col-sm-4 footer_middle clearfix">
	 <div class="footer_middle_inner">
	  <h2>Opening Hours</h2>
	  <p><a href="#">Monday…………………………………..9: 00 – 19: 00</a></p>
	   <p><a href="#">Tuesday…………………………………..9: 00 – 19: 00</a></p>
	    <p><a href="#">Wednesday……………………………..9: 00 – 19: 00</a></p>
		 <p><a href="#">Thursday…………………………………9: 00 – 19: 00</a></p>
		  <p><a href="#">Friday………………………………………9: 00 – 19: 00</a></p>
		   <p><a href="#">Saturday………………………………….9: 00 – 19: 00</a></p>
		    <p><a href="#">Sunday…………………………………………….CLOSED</a></p>
	 </div>
	</div>
	
	  
	  
	 
<section id="footer_last" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="footer_last clearfix">
   <div class="col-sm-5 footer_last_left clearfix">
    <div class="footer_last_left">
	 <p class="website">© 2022 FoodKo. All rights reserved | Design by<a href="http://www.templateonweb.com"> TemplateOnWeb</a></p>
	</div>
   </div>
   <div class="col-sm-4 footer_last_middle clearfix">
    <div class="footer_last_middle_inner">
	 <ul>
		 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
		 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
   </div>
   <div class="col-sm-3 footer_last_right clearfix">
    <div class="footer_last_right_inner">
	 <p>All Rights Reserved</p>
	</div>
   </div>
   </div>
  </div>
 </div>
</section>

</body>
      
</html>
