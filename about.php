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
	<div class="w3ls-banner-1"> 
		<!-- banner-text --> 
	
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
						<h1><a class="navbar-brand" href="index.html">E-Event Manager</a></h1>
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
	</div>	
<!-- about -->
<!-- about -->
	<div class="about">
		<div class="container">
		<h2 class="heading-agileinfo">About Us<span>E-Event Manager will help you to manage Events professionally</span></h2>
			<div class="about-grids-1">
				<div class="col-md-5 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="images/g3.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-7 agileits-about-right">
					<h5></h5>
					<p>* Want to organize an event..? We are here to help you..!
					<br>
					Your event is special moment of your life, so it should be grand and memorable, Event without a plan is just a wish, we'll help you to compleate your wish....!
					<br>
					<br>
					<br>
					*Are you an Event management company..? Want to promote your business..? searching for clints..?
					we we'll be helping you to grow your business, Just register to our website and use it..!
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- offers -->
	<div class="offers">
		<div class="container">
			
			<h3 class="heading-agileinfo white-w3ls">Our Offers<span class="black-w3ls">Some amazing offers coming soon...! Stay tuned..!</span></h3>
			<div class="offers-grids">
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- offers -->
		<!-- about-team -->
	<div class="team">		
		<div class="container">
			<h3 class="heading-agileinfo">Our Team<span>We have professionally talented team...!</span></h3>			
			<div class="team-row-agileinfo">
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t2.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption ">
							<h4>Vipul Gaikwad.</h4>
							<p>Panvel</p>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t1.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Prathmesh Shirke.</h4>
							<p>Badlapur</p>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t3.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Nishant More.</h4>
							<p>Sion</p>				
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t4.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Ronil Sawant.</h4>
							<p>Mumbai Central</p>						
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about-team -->

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
					Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g8.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->
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