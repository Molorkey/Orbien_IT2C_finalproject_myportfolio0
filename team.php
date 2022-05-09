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

<section id="team" class="clearfix">
 <div class="team_main">
  <div class="container">
  <div class="row">
   <div class="team clearfix">
   <h2>Our team</h2>
   </div>
  </div>
 </div>
 </div>
</section>

<section id="team_2" class="clearfix">
  <div class="container">
  <div class="row">
   <div class="team_2 clearfix">
   <h2>Meet our glorious team</h2>
   <p>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa arcu eget.<br>Nostra, per inceptos C. Curabitursodales ligula in libero.</p>
   </div>
   <div class="team_2_middle clearfix">
    <div class="destacados">
		<div class="col-sm-4">
    		<div>
				<img src="img/66.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Ipsum Dolor</h2>
				<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum nunc sit
				aptent taciti sociosqu ad litora torquent per conubia.</p>
				<a href="#" class="btn btn-primary" title="Enlace">Sed nisi »</a>
			</div>
		</div>

		<div class="col-sm-4">
			<div>
				<img src="img/67.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Class aptent</h2>
				<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum nunc sit
				aptent taciti sociosqu ad litora torquent per conubia.</p>
				<a href="#" class="btn btn-primary" title="Enlace">Sed nisi »</a>
			</div>
		</div>

		<div class="col-sm-4">
			<div>
				<img src="img/68.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Duis sagittis</h2>
				<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum nunc sit
				aptent taciti sociosqu ad litora torquent per conubia.</p>
				<a href="#" class="btn btn-primary" title="Enlace">Sed nisi »</a>
			</div>
		</div>
	</div>
   </div>
   <div class="team_2_middle clearfix">
    <div class="destacados">
		<div class="col-sm-4">
    		<div>
				<img src="img/69.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Lacinia nunc</h2>
				<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum nunc sit
				aptent taciti sociosqu ad litora torquent per conubia.</p>
				<a href="#" class="btn btn-primary" title="Enlace">Sed nisi »</a>
			</div>
		</div>

		<div class="col-sm-4">
			<div>
				<img src="img/70.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Aptent taciti</h2>
				<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum nunc sit
				aptent taciti sociosqu ad litora torquent per conubia.</p>
				<a href="#" class="btn btn-primary" title="Enlace">Sed nisi »</a>
			</div>
		</div>

		<div class="col-sm-4">
			<div>
				<img src="img/71.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Praesent libero</h2>
				<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum nunc sit
				aptent taciti sociosqu ad litora torquent per conubia.</p>
				<a href="#" class="btn btn-primary" title="Enlace">Sed nisi »</a>
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

<script src="js/ziehharmonika.js"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: '★'
		});
	});
</script>

</body>
      
</html>
