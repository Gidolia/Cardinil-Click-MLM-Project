<?php include "database_connect.php";?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forget Password || CARDINIL</title>
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
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(https://images.pexels.com/photos/176851/pexels-photo-176851.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Forget Password</h1>
							
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
					<h3>Forget Password </h3>
					<p>Password will be sent to your registered mobile number.</p>
					<form method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">User ID</label>
								<input type="text" name="id" id="fname" class="form-control" placeholder="Your User ID">
							</div>
						</div>

						
						<div class="form-group">
							<input type="submit" name="submit_forget" value="Forget Password" class="btn btn-primary">
						</div>

					</form>	
					<a href="signin.php">Remember Password Login</a>
				</div>
			</div>
			
		</div>
	</div>
    
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
	
	<?php
          	if(isset($_POST[submit_forget]))
          	{
          		$que=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$_POST[id]'");
    if(mysql_num_rows($que)!=0)
    {
        $dfd=mysql_fetch_assoc($que);
        $dd='Your Password is '.$dfd[password];
$dd = str_replace(' ', '%20', $dd);
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=income&smstype=TRANS&numbers='.$dfd[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
        echo "<script>alert('Password Sended To Your Register Mobile Number');
        location.href='signin.php';</script>";
    }
    else{echo "<script>alert('Invalid user name');
    location.href='forget_password.php';</script>";}
          		
          		
          	} include "include/footer.php";?>
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

