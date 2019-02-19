<?php
include 'session.php';
if(checkSession()){
	header('location:console.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Event Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts --> 
<link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h3>We Celebrate  <span>Birthday Parties</span></h3>
												<p></p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>We Celebrate  <span>New Year Parties</span></h3>
										<p></p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h3>We Celebrate  <span>Marriage Functions</span></h3>
										<p></p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		 
 
	</div>	
	<!-- //banner --> 
			<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Events</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">E-Event Manager</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a class="hvr-sweep-to-right" href="index.php">Home</a></li>
							<li><a class="hvr-sweep-to-right" href="about.php">About</a></li>
							
							<li><a class="hvr-sweep-to-right" href="gallery.php">Gallery</a></li>
							<li><a class="hvr-sweep-to-right" href="contact.php">Register</a></li>
							<li><a class="hvr-sweep-to-right" href="login.php">Login</a></li>
				
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!-- ser_agile -->
		<div class="ser_agile">
			<div class="container">
			<h2 class="heading-agileinfo">Welcome<span>E-Event Manager will help you to manage Events professionally</span></h2>
			<p>* Want to organize an event..? We are here to help you..!
			<br>
			Your event is special moment of your life, so it should be grand and memorable, Event without a plan is just a wish, we'll help you to compleate your wish....!
			<br>
			*Are you an Event management company..? Want to promote your business..? searching for clints..?
			<br>
			we we'll be helping you to grow your business, Just register to our website and use it..!</p>
			<div class="ser_w3l">  
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-birthday-cake" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Birthday</h4>
					<p>We have well known companies who can manage your birthday.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Concert</h4>
					<p>We can help you to manage concerts.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-globe" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Weddings</h4>
					<p>We can manage all the weddings</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-camera" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Fashion Week Shows</h4>
					<p>We have many experts who can manage your fashion shows well.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-cutlery" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Parties</h4>
					<p>We can manage parties such as Sangeet, Reception, Retirement Parties.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-tasks" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Meetings</h4>
					<p>we can help you in organizing professional meetings.</p>
				  </div>
				</div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			</div>
		</div>
	<!-- //ser_agile -->
<!-- Stats -->
	<div class="stats-agileits">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">We Have Something To Be Proud Of<span class="black-w3ls"></span></h3>
	</div>
		<div class="stats-info agileits w3layouts">
		<div class="container">
			<div class="col-md-4 col-sm-4agileits w3layouts stats-grid stats-grid-1">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2500' data-delay='3' data-increment="2">2500</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Happy Clients</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1000' data-delay='3' data-increment="2">1000</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Events</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">
			<i class="fa fa-cog" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='3421' data-delay='3' data-increment="2">3421</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Services</h4>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Stats -->
	
	<!-- showcase_w3layouts -->	
	<div class="showcase_w3layouts">
		<div class="container">
		<h3 class="heading-agileinfo">Services<span>E-Event Manager will help you to manage Events professionally</span></h3>
			<div class="our_agile-info">
			<div class="showcase">
				<div class="thumbnail thumbnail--awesome">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
				<div class="desc">
				
					<h4>Birthday</h4>
					<p></p>
					<p><a href="birthday.php">Meet Planner</a>
					</p>

				</div>
			</div>
			
			<div class="showcase showcase--inverted">
				<div class="desc">
					
					<h4>Wedding</h4>
					<p></p>
					<p><a href="wedding.php">Meet Planner</a>
					</p>
				</div>
				<div class="thumbnail thumbnail--awesome1">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
			</div>
			<div class="showcase">
				<div class="thumbnail thumbnail--awesome2">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
				<div class="desc">
				
					<h4>Shows</h4>
					<p></p>
					<p><a href="sangeet.php">Meet Planner</a>
					</p>
				</div>
			</div>
			<div class="showcase showcase--inverted">
				<div class="desc">
					
					<h4>Meetings</h4>
					<p></p>
					<p><a href="catering.php">Meet Planner</a>
					</p>
				</div>
				<div class="thumbnail thumbnail--awesome3">
					<div class="thumbnail__overlay">
					
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>

<!-- footer -->
			<div class="copy-right">
				<div class="container">
				<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
						<p></a></p>
						</div>
					</div>
				<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					</div>
			</div>
			
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				E-Event Manager
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g99.jpg" alt=" " class="img-responsive" />
						<p>
							<i>" An Event Without Plan Is Only A Wish..! So, We Are Here To Compleate Your Wish..!"</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->

						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--//flexiselDemo1 -->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>