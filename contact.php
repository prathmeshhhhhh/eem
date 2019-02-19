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
<style>
.w3ls-pr input[type="password"], .w3ls-pr input[type="email"] {
	background: none;
	border: solid 1px #000;
	width: 100%;
	outline: none;
	padding: 1em;
	font-size: .9em;
	color: #999;
	margin-bottom: 1.5em;
	text-transform: capitalize;
}
</style>
<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div> 
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
<!-- contact -->	
	<div class="w3ls_address_mail_footer_grids">
	<!-- //showcase_w3layouts -->
<section class="about_agile">
		<div class="container">	
					<h3 class="heading-agileinfo white-w3ls">Event Management Company<span class="black-w3ls">Registration</span></h3>
			<div class="about-grids">
				
				<div class="abt-rt-grid">
					<div class="w3ls-grid-head text-center">
						<h3>Company Registration</h3>
					</div>
					<div class="abt-form text-center">
						<form action="register.php" method="post" enctype='multipart/form-data'>
							<div class="col-sm-4 col-xs-4 w3ls-lt-form">
								<div class="w3ls-pr">
									<select class="sel" name='category' required="">
										<option value="">Company's Categeroy</option>
										<option value="birthday">Birthday</option>
										<option value="wedding">Wedding</option>
										<option value="show">Show</option>
										<option value="meeting">Meetings</option>
									</select>
									<input type="text" name="name" placeholder="Company Name">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4 w3ls-lt-form">
								<div class="w3ls-pr">
									
									<input type="text" name="address" placeholder="Company Address" required="required">
									<input type="tel" name="phone" placeholder="Company's Phone no" required="required">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4 w3ls-lt-form">
								<div class="w3ls-pr">
									
									<input type="email" name="email" placeholder="Company's Email" required="required">
									<input type="password" name="password" placeholder="password" required="required">
								</div>
							</div>
							<div class="col-sm-12 col-xs-4 w3ls-lt-form">
							<div class="w3ls-pr">
									<input type="text" name="description" placeholder="Company's Description" required="required">
									
								</div>
								<div class="w3ls-pr">
								Select Image: <input type='file' name='image'/>
								</div>
							</div>
							<div class="clearfix"></div>
							<input type="submit" value="Register">

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
			
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