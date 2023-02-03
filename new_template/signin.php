<?php include "database_connect.php";?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIGN IN || CARDINIL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="CARDINIL Sign IN" />
	<meta name="keywords" content="Cardinil, Sign In" />
	<meta name="author" content="gettemplates.co" />

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<?php include "include/header.php";?>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>SIGN IN</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>SIGN IN </h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">User ID</label>
								<input type="text" name="id" id="fname" class="form-control" placeholder="Your User ID">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Password</label>
								<input type="text" name="password"  class="form-control" placeholder="Your Password">
							</div>
						</div>

						
						<div class="form-group">
							<input type="submit" name="submit_signin" value="Sign IN" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
<?php
          	if(isset($_POST[submit_signin]))
          	{
          		$que=mysql_query("SELECT `ibo_id`, `password` FROM `ibo` WHERE `ibo_id`='$_POST[id]' AND `password`='$_POST[password]'");
    if(mysql_num_rows($que)!=0)
    {
        $_SESSION["ibo_id"]=$_POST["id"];
        $_SESSION["ibo_password"]=$_POST["password"];
        echo "<script>location.href='ibo_panel/production/index.php';</script>";
    }
    else{echo "<script>alert('Invalid user name or Passwordq');
    location.href='signin.php?ibo_id=$_POST[id]';</script>";}
          		
          		
          	}?>
    
	<div class="gtco-cover gtco-cover-sm" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Simple</h1>
							<h2>Earn millions of rupees a month from Cardinil of new age, without investing any money or getting money without anyone</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<?php include "include/footer.php";?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

