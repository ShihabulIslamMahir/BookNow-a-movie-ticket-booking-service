<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>BOOKNOW!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" ><span class="b1">B</span><span class="b2">O</span><span class="b3">O</span><span class="b4">K</span><span class="b5">N</span><span class="b5">O</span><span class="b5">W</span></a>
					</div><!-- //LOGO -->
					
					
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Home</a></li>
								<li class="scroll_btn"><a href="#aboutus" >About</a></li>
								<li class="scroll_btn"><a href="#boxoffice" >Box Office</a></li>
								<li class="scroll_btn"><a href="booknowmain.php" >BookNow!</a></li>
								<li class="scroll_btn"><a href="#recentrelease" >Recent Release</a></li>
								<li class="scroll_btn last"><a href="#contacts" >Contacts</a></li>
								
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
                            <p class="title1 captionDelay2 FromTop">AYNABAZI</p> <br> 							
							<p class="title3 captionDelay6 FromTop">ON AIR</p>
                          
							</div>
						<a class="slide_btn FromRight" href="booknowmain.php" >Book Now!</a>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">DOOB</p> <br>
							<p class="title2 captionDelay4 FromLeft">ON AIR</p>
							</div>
						<a class="slide_btn FromRight" href="booknowmain.php" >Book Now!</a>
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">DHAKA ATTACK</p><br> 
							<p class="title2 captionDelay2 FromBottom">ON AIR</p>
							</div>
						<a class="slide_btn FromRight" href="booknowmain.php" >Book Now!</a>
						
						<!-- VIDEO BACKGROUND -->
						<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
						<!-- //VIDEO BACKGROUND -->
					</li>
				</ul>
			</div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="images/ab.jpg" alt="" /></li>
					<li><img src="images/do.jpg" alt="" /></li>
					<li><img src="images/da.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="aboutus">

			<div class="cleancode_block">
				
				<!-- CONTAINER -->
				<div class="container">
					
					<!-- CASTOM TAB -->
				<p class="title"><b>About</b> Us</p>
							<span> <?php 
									$queryGet="select * from about";
					                $run_queryGet=$conn->query($queryGet);
                                      while($row_run_queryGet=$run_queryGet->fetch_assoc()){
					                	$about=$row_run_queryGet["about_us"];
					                }
								 ?>
                        <p class="text-black" style="font-size: 20px">
									<?php echo $about ?>
                                </p></span>
						</div>
                    </div>
           	</section><!-- //ABOUT -->
		<!-- TO Movies -->
		<section id="boxoffice" class="padbot20">
		
			<!-- CONTAINER -->
			<div class="container">
				
                <br>
                <h2><b>Top</b> Five</h2>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
                 <?php 
				            $queryIma="select * from images";
							$run_queryIma=$conn->query($queryIma);
                            $count=1;
							while($row_f=$run_queryIma->fetch_assoc()){
 
						?>
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src=<?php echo "images/boxoffice/pic".$count.".jpg";?> alt=""/>
								<a class="zoom" href=<?php echo "images/boxoffice/pic".$count.".jpg";?> rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" ><?php echo $row_f["description"]; ?></a>
									</div>
							</div>
						</div>
					</div><!-- //work1 -->
					 <?php 
							$count=$count+1;
							}
						 ?>
				</div>
			</div>
			
			
			<!-- OUR CLIENTS -->
			<div class="our_clients">
			
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/cine.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/2.png" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/jaaz.png" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/universal.png" alt="" />
						</div>
                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/disnep.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/sony.png" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- CONTAINER -->
			</div><!-- //OUR CLIENTS -->
		</section><!-- //PROJECTS -->
		
		
		<!-- TEAM -->
		<section id="recentrelease">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Recent</b> Trailers</h2>
				
				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">
				
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/K-jqUUD8R2g" frameborder="0" allowfullscreen></iframe>
								</div>
								
								
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/coOKvrsmQiI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
								
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/om9YCk7ufHs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
								
							</div>
						</div><!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/0WWzgGyAH6Y" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
								
							</div>
						</div><!-- crewman4 -->
						
						<!-- crewman5 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/3cxixDgHUYw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
								
								</div>
                        </div>
						<!-- crewman5 -->
						
						<!-- crewman6 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									 <iframe width="300" height="300" src="https://www.youtube.com/embed/yvUCSoN9Zv8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

								</div>
								
								</div>
							
							</div>
						<!-- crewman6 -->
						
						<!-- crewman7 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/q4HuPKhyStk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
								
							</div>
						</div><!-- crewman7 -->
						
						<!-- crewman8 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<iframe width="300" height="300" src="https://www.youtube.com/embed/6ZfuNTqbHE8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
								
						</div>
                        </div><!-- crewman8 -->
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
		<!-- NEWS -->
		<section id="quotes">
		
			<!-- CONTAINER -->
            <br>
			<div class="container">
				<h2><b>Movie</b> Quotes</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">"They may take our lives, but they'll never take our freedom!"</div>
							<div class="testim_author">— <b>Braveheart</b>,1995</div>
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“When you realize you want to spend the rest of your life with somebody, you want the rest of your life to start as soon as possible.”</div>
							<div class="testim_author">—  <b>When Harry Met Sally</b>, 1989</div>
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“My name is Maximus Decimus Meridius, commander of the Armies of the North, General of the Felix Legions and loyal servant to the true emperor, Marcus Aurelius. Father to a murdered son, husband to a murdered wife. And I will have my vengeance, in this life or the next.”</div>
							<div class="testim_author">— <b>Gladiator</b>, 2000</div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
			<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p>We are here for your support. We always believe in quality rather than quantity</p>
					<p>Our team is intentionally small, eclectic, and skilled</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>
					
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
</body>
</html>