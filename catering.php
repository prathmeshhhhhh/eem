<?php
include 'session.php';
if(checkSession()){
	header('location:console.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E-EVENT MANAGER</title>
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
							<li><a class="hvr-sweep-to-right" href="contact.php">Registration</a></li>
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
	<!-- events -->
	<!--Events --> 
		<div class="events-agileits-w3layouts">
		<div class="container">
		<h2 class="heading-agileinfo">Meeting Manageing Companies<span></span></h2>
				<div class="popular-grids">
					<?php
						include 'db.php';
						$query = "SELECT * FROM organizers WHERE category='meeting'";
						$res = mysqli_query($conn, $query);
						while($row = mysqli_fetch_assoc($res)){
					?>
					<div class="col-md-4 popular-grid">
							<img src="data:image/jpeg;base64,<?php echo base64_encode( $row['image'] )?>" class='img-responsive' alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal2">Meeting</a></h5>
							<div class="detail-bottom">
								<p><h2><?php echo $row['name']?></h2></p>
								<p><?php echo $row['description']?></p>
								<br>
								<p><a href="#" data-toggle="modal" onclick="setId('<?php echo $row['id']?>')" data-target="#myModal">Contact US</a></p>
							</div>
						</div>
					</div>
						<?php }?>
					<div class="clearfix"></div>
				</div>
		</div>
		</div>
<!-- //Events --> 
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
								<div class="contact-form">
				<h4 class="white-w3ls">Contact Form</h4>
				<form action="mail.php" method="post">
					<input type="hidden" id="id" name="id">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="name" required="">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="phone" required="">
						<label>Phone No</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="email" required=""> 
						<label>Email</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="description" required="" placeholder="fill up the requirement e.g.(peoples invited = 1000)">
						<label>Meeting Description</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="date" name="date" required="">
						
						<span></span>
					</div>
					<div class="styled-input">
						
						<textarea name="message" required="" placeholder="provide your budget and other necessary things"></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
				
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
	
	<script>
		function setId(id){
			$("#id").val(id);
		}
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>