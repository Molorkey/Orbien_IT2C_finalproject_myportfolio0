<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodKo</title>
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

<section id="blog" class="clearfix">
    <div class="container">
  <div class="row">
   <div class="blog clearfix">

   	<?php
   echo '<h2>FoodKo</h2>';?>

   </div>
  </div>
 </div>
</section>

<section id="blog_2" class="clearfix">
    <div class="container">
  <div class="row">
   <div class="blog_2 clearfix">
   <div class="col-sm-9 blog_2_left clearfix">
    <div class="blog_2_left_main clearfix">
	 <div class="blog_2_left_main_inner_1 clearfix">
	  <div class="offer_home_inner text-center">
	   <a href="details.php"><img class="" src="img/43.jpg" width="100%" height="400px"></a>
	  </div>
	 </div>
	 <div class="blog_2_left_main_inner_2 clearfix">
	  <h2><a href="details.php">Vestibulum lacinia</a></h2>
	  <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula in libero. Sed dignissim lacinia nunc consectetur adipiscing elit. Integer nec odionec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
	 </div>
	 <div class="blog_2_left_main_inner_3 clearfix">
	  <div class="col-sm-6 nice_left clearfix">
	   <div class="nice_left_inner">
	    <p><a href="#">March 18, 2017 </a> By <a href="#"> admin </a> / <a href="#">	Nulla, Dapibus</a></p>
	   </div>
	  </div>
	  <div class="col-sm-6 nice_right clearfix">
	   <div class="nice_right_inner">
	    <p><a href="#"><i class="fa fa-comment-o"></i> 2 Comment</a><span class="like_1"><a href="#"><i class="fa fa-heart-o"></i> 3 Like</a></span></p>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="blog_2_left_main clearfix">
	 <div class="blog_2_left_main_inner_1 clearfix">
	  <div class="offer_home_inner text-center">
	   <a href="details.php"><img class="" src="img/44.jpg" width="100%" height="400px"></a>
	  </div>
	 </div>
	 <div class="blog_2_left_main_inner_2 clearfix">
	  <h2><a href="details.php">Integer nec odionec</a></h2>
	   <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula in libero. Sed dignissim lacinia nunc consectetur adipiscing elit. Integer nec odionec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
	 </div>
	 <div class="blog_2_left_main_inner_3 clearfix">
	  <div class="col-sm-6 nice_left clearfix">
	   <div class="nice_left_inner">
	    <p><a href="#">March 23, 2017 </a> By <a href="#"> admin </a> / <a href="#">	Class, Aptent</a></p>
	   </div>
	  </div>
	  <div class="col-sm-6 nice_right clearfix">
	   <div class="nice_right_inner">
	    <p><a href="#"><i class="fa fa-comment-o"></i> 1 Comment</a><span class="like_1"><a href="#"><i class="fa fa-heart-o"></i> 2 Like</a></span></p>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="blog_2_left_main clearfix">
	 <div class="blog_2_left_main_inner_1 clearfix">
	  <div class="offer_home_inner text-center">
	   <a href="details.php"><img class="" src="img/45.jpg" width="100%" height="400px"></a>
	  </div>
	 </div>
	 <div class="blog_2_left_main_inner_2 clearfix">
	  <h2><a href="details.php">Sed dignissim lacinia</a></h2>
	  <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula in libero adipiscing elit. Integer nec odionec odio.</p>
	 </div>
	 <div class="blog_2_left_main_inner_3 clearfix">
	  <div class="col-sm-6 nice_left clearfix">
	   <div class="nice_left_inner">
	    <p><a href="#">April 19, 2018 </a> By <a href="#"> admin </a> / <a href="#">	Nulla, Sagittis</a></p>
	   </div>
	  </div>
	  <div class="col-sm-6 nice_right clearfix">
	   <div class="nice_right_inner">
	    <p><a href="#"><i class="fa fa-comment-o"></i> 1 Comment</a><span class="like_1"><a href="#"><i class="fa fa-heart-o"></i> 1 Like</a></span></p>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="blog_2_left_main clearfix">
	 <div class="blog_2_left_main_inner_1 clearfix">
	  <div id="carousel" class="carousel slide carousel-fade">

            <!-- Carousel items -->
            <div class="carousel-inner">
              <div data-slide-no="0" class="item carousel-item">
                <img src="img/46.jpg" alt="">
              </div>
              <div data-slide-no="1" class="item carousel-item active">
                <img src="img/47.jpg" alt="">
              </div>
              <div data-slide-no="2" class="item carousel-item">
                <img src="img/48.jpg" alt="">
              </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xxRN#carousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xxRN#carousel" data-slide="next">›</a>
          </div>
	 </div>
	 <div class="blog_2_left_main_inner_2 clearfix">
	  <h2><a href="details.php">Sed dignissim lacinia</a></h2>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.Vestibulum lacinia arcu eget nulla.
 Class aptent taciti sociosqu</p>
	 </div>
	 <div class="blog_2_left_main_inner_3 clearfix">
	  <div class="col-sm-6 nice_left clearfix">
	   <div class="nice_left_inner">
	    <p><a href="#">April 19, 2018 </a> By <a href="#"> admin </a> / <a href="#">	Mauris , Dapibus</a></p>
	   </div>
	  </div>
	  <div class="col-sm-6 nice_right clearfix">
	   <div class="nice_right_inner">
	    <p><a href="#"><i class="fa fa-comment-o"></i> 2 Comment</a><span class="like_1"><a href="#"><i class="fa fa-heart-o"></i> 1 Like</a></span></p>
	   </div>
	  </div>
	 </div>
	 <div class="blog_2_left_main_inner_4 clearfix">
	  <ul>
	   <li class="active_3"><a href="#">1</a></li>
	    <li><a href="details.php">2</a></li>
		 <li class="last_tab"><a href="details.php"><i class="fa fa-chevron-right"></i></a></li>
	  </ul>
	 </div>
	</div>
   </div>
   <div class="col-sm-3 blog_2_right clearfix">
    <div  class="blog_2_right_top clearfix">
	 <div class="courses_inner clearfix">
	  <div class="input-group col-sm-12 courses_inner_1 clearfix">
                                <input type="text" class="  search-query form-control form-control_course" placeholder="Search Courses...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <span class="location"><i class="fa fa-search"></i></span>
                                    </button>
                                </span>
                            </div>
	 </div>
	 <div class="blog_2_right_top_inner_2 clearfix">
	  <h2>About us</h2>
	  <p>Lorem ipsum dolor sit amet cursus<br>Curabitursodales ligula in libero,<br> aptent taciti sociosqu ad litora<br> lacinia arcu eget.</p>
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
						<img src="img/49.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Semper Porta</a></h2>
		  <h5><a href="#">March 13, 2018</a></h5>
		 </div>
		</div>
	  </div>
	 <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/50.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Dolor Sit Amet</a></h2>
		  <h5><a href="#">March 22, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/51.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Sed Cursus</a></h2>
		  <h5><a href="#">March 17, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/52.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Nulla Quis Sem</a></h2>
		  <h5><a href="#">March 17, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/53.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Praesent libero</a></h2>
		  <h5><a href="#">March 23, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/54.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Lacinia arcu</a></h2>
		  <h5><a href="#">April 10, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/55.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Praesent mauris</a></h2>
		  <h5><a href="#">April 27, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/56.jpg" alt="img25"/>
						<figcaption>
							<a href="details.php">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="#">Lacinia nunc</a></h2>
		  <h5><a href="#">April 25, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_2 clearfix">
	  <h2>Duis sagittis ipsum</h2>
	  <h6><a href="#">Nulla, Dolor ,Odio, Massa ,Ipsum</a></h6>
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

</body>
      
</html>
