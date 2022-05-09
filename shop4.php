<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juicy</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline|Yanone+Kaffeesatz" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">Juicy</a>
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

<section id="shop" class="clearfix">
 <div class="shop_main">
  <div class="container">
  <div class="row">
   <div class="shop clearfix">
   <h2>Shop With Conubia</h2>
   </div>
  </div>
 </div>
 </div>
</section>

<section id="shop_2" class="clearfix">
    <div class="container">
  <div class="row">
   <div class="shop_2 clearfix">
   <div class="col-sm-9 shop_2_left clearfix">
    <div class="shop_2_left_top clearfix">
	 <div class="shop_2_left_top_inner_1 clearfix">
	  <div class="col-sm-8 shop_2_left_top_inner_1_left clearfix">
	   <div class="shower_left clearfix">
	    <h4>Showing 1–9 of 15 resultss</h4>
	   </div>
	  </div>
	  <div class="col-sm-4 shop_2_left_top_inner_1_right clearfix">
	   <div class="shower_right clearfix">
	    <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Duis sagittis</h3>
					<span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="shower_right_inner clearfix">
				 <div class="panel-body" style="display: none;">
				 <ul>
				  <li><a href="shop-details.php">Short by Vestibulum</a></li>
				  <li><a href="shop-details.php">Short by Lacinia </a></li>
				  <li><a href="shop-details.php">Short by Consectetur  </a></li>
				  <li><a href="shop-details.php">Short by Praesent</a></li>
				  <li><a href="shop-details.php">Short by Inceptos</a></li>
				  <li><a href="shop-details.php">Short by Sociosqu</a></li>
				  <li><a href="shop-details.php">Short by Dignissim</a></li>
				 </ul>
				 </div>
				</div>
			</div>
	   </div>
	  </div>
	 </div>
	 <div class="shop_2_left_top_inner_2 clearfix">
	  <div class="center_1_middle clearfix">
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/8.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Mauris massa</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 15.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/9.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Torquent per</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 14.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/10.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Vestibulum</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 28.00</h6>
	 </div>
	 </div>
	</div>
	  <div class="center_1_middle clearfix">
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/4.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Conubia Nostra</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 18.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/5.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Sed Dignissim</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 12.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/6.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Elementum</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 25.00</h6>
	 </div>
	 </div>
	 
	</div>
	  <div class="center_1_middle clearfix">
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/11.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Dapibus Diam</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 32.00</h6>
	 </div>
	 </div>
     <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/7.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Praesent libero</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 32.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.php">
                      <div class="img"><img src="img/6.jpg" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.php">Imperdiet</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>€ 10.00</h6>
	 </div>
	 </div>
	</div>
	 </div>
	 <div class="shop_2_left_top_inner_3 clearfix">
	  <div class="blog_2_left_main_inner_4 clearfix">
	  	<?php
	  echo '<ul>
	   <li class="deactive_3"><a href="shop.php">1</a></li>
	    <li class="deactive_3"><a href="shop1.php">2</a></li>
	    <li class="deactive_3"><a href="shop2.php">3</a></li>
	    <li class="deactive_3"><a href="shop3.php">4</a></li>
	    <li class="active_3"><a href="shop4.php">5</a></li>
	    <li class="deactive_3"><a href="shop5.php">6</a></li>
	    <li class="deactive_3"><a href="shop6.php">7</a></li>
		 <li class="last_tab"><a href="shop-details.php"><i class="fa fa-chevron-right"></i></a></li>
	  </ul>';?>
	 </div>
	 </div>
	</div>
   </div>
   <div class="col-sm-3 shop_2_right clearfix">
    <div class="shop_2_right_top clearfix">
	 <div class="shop_2_right_top_inner_1 clearfix">
	  <h3>Filter by price</h3>
	 </div>
	 <div class="shop_2_right_top_inner_2 clearfix">
	  <ul>
	   <li><p>Price: €8 — €32</p></li>
	   <li><a href="shop-details.php">filter</a></li>
	  </ul>
	 </div>
	 <div class="shop_2_right_top_inner_3 clearfix">
	  <div class="blog_2_right_top_inner_2 clearfix">
	  <h2>Consectetur</h2>
	  <h5><a href="#">Mauris (6)</a></h5>
	  <h5><a href="#">Libero (5)</a></h5>
	  <h5><a href="#">Lacinia (4)</a></h5>
	  <h5><a href="#">Odionec odio (3)</a></h5>
	   <h5><a href="#">Integer nec (4)</a></h5>
	    <h5><a href="#">Arcu eget (6)</a></h5>
		 <h5><a href="#">Dolor sit (2)</a></h5>
		  <h5><a href="#">Taciti  (1)</a></h5>
		  <h2>Class Aptent</h2>
	 </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/49.jpg" alt="img25">
						<figcaption>
							<a href="shop-details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="shop-details.php">Semper Porta</a></h2>
		  <h5><a href="shop-details.php">April 20, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/50.jpg" alt="img25">
						<figcaption>
							<a href="shop-details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="shop-details.php">Fusce nec tellus</a></h2>
		  <h5><a href="shop-details.php">April 17, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/51.jpg" alt="img25">
						<figcaption>
							<a href="shop-details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="shop-details.php">Jump For Juice</a></h2>
		  <h5><a href="shop-details.php">April 17, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_2 clearfix">
	  <h2>Duis sagittis ipsum</h2>
	  <h6><a href="shop-details.php">Nulla, Dolor ,Odio, Massa ,Ipsum</a></h6>
	  <h2>Share</h2>
	  <ul>
	   <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
	   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	  </ul>
	 </div>
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
	 <div class="footer_left_inner">
	  <h2>Quis sem at, say HI!</h2>
	  <h5><a href="#"><i class="fa fa-phone"></i>0-875-275-83945, 0-684-947-846454</a></h5>
	  <h5><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat 9.00 - 19.00 Sunday CLOSED</a></h5>
	  <h5><a href="#"><i class="fa fa-link"></i>365 Vestibulum lacinia arcu eget nulla 4468</a></h5>
	  <p><img src="img/31.jpg"></p>
	 </div>
	</div>
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
	<div class="col-sm-4 footer_right clearfix">
	  <div class="footer_right_top clearfix">
	    <h2>Instagram</h2>
	  </div>
	 <div class="footer_right_inner clearfix">
	  <div class="col-sm-4 footer_right_inner_left clearfix">
	   <div class="footer_right_inner_left_bottom clearfix">
	    <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/14.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	   </div>
	  </div>
	  <div class="col-sm-4 footer_right_inner_left clearfix">
	   <div class="footer_right_inner_left_bottom clearfix">
	    <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/15.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	   </div>
	  </div>
	  <div class="col-sm-4 footer_right_inner_left clearfix">
	   <div class="footer_right_inner_left_bottom clearfix">
	    <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/16.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	   </div>
	  </div>
	 </div>
	 <div class="footer_right_inner clearfix">
	  <div class="col-sm-4 footer_right_inner_left clearfix">
	   <div class="footer_right_inner_left_bottom clearfix">
	    <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/25.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	   </div>
	  </div>
	  <div class="col-sm-4 footer_right_inner_left clearfix">
	   <div class="footer_right_inner_left_bottom clearfix">
	    <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/26.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	   </div>
	  </div>
	  <div class="col-sm-4 footer_right_inner_left clearfix">
	   <div class="footer_right_inner_left_bottom clearfix">
	    <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/27.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="footer_last" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="footer_last clearfix">
   <div class="col-sm-5 footer_last_left clearfix">
    <div class="footer_last_left">
	 <p class="website">© 2013 Your Website Name. All rights reserved | Design by<a href="http://www.templateonweb.com"> TemplateOnWeb</a></p>
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

<script type="text/javascript">
	$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
})
	</script>

</body>
      
</html>
