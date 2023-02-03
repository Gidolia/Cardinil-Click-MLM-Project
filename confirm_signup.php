<?php include "database_connect.php";
$dff=mysql_query("SELECT * FROM `ibo` WHERE `mobile`=$_GET[mobile]");
$sds=mysql_fetch_assoc($dff);
$f=mysql_num_rows($dff);
if($f!=0)
{
echo "<script>alert('Mobile No. Already Register Please Try Again with diffrent Mobile no.');
		location.href='signup.php';</script>";
}



$otp=$_GET[jnfvfdbfdbfd]-54152454465;
$fghsj=$otp+8456456789852;
$r_id=$_GET[dsafcgvjh]-8965668629;
$dd='Your code is '.$otp;
$dd = str_replace(' ', '%20', $dd);
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=CRDINL&smstype=TRANS&numbers='.$_GET[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "<script>alert('Otp sended sucessfully to your mobile number');</script>";
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIGN UP || CARDINIL</title>
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
							<h1>SIGN UP</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<form action="process_register_ibo.php" method="post" class="apply_form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="apply_info_text text-center">
                                    <h3>Sign Up</h3>
                                    <p>Please Check Your Detail. It will not gone change later</p>
                                </div>
                            </div>
                            <?php
                            $sss=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$r_id'");
                            $ss=mysql_fetch_assoc($sss);
                            ?>
                            
                
                    <table class="table">
                        <tr>
                            <td>Referal ID</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="r_id" class="form-control" value="<?php echo $r_id;?>" readonly>
                                <?php if($_GET[didi]==1){ }?></td>
                                </div></div>
                        </tr>
                        <tr>
                            <td>Referal Name</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="r_name" class="form-control" value="<?php echo $ss[name];?>" readonly></div></div></td>
                        </tr>
                        <tr>
                            <td>Your Name</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="name" class="form-control" value="<?php echo $_GET[name];?>" readonly></div></div></td>
                        </tr>
                        <tr>
                            <td>Your D.O.B</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="dob" class="form-control" value="<?php echo $_GET[dob];?>" readonly></div></div></td>
                        </tr>
                        <tr>
                            <td>Your Mobile No.</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="mobile" class="form-control" value="<?php echo $_GET[mobile];?>" readonly></div></div></td>
                        </tr>
                        <tr>
                            <td>Your Email ID</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="email" class="form-control" value="<?php echo $_GET[email];?>" readonly></div></div></td>
                        </tr>
                        <tr>
                            <td>Your City</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="city" class="form-control" value="<?php echo $_GET[city];?>" readonly></div></div></td>
                        </tr>
                        <tr>
                            <td>Your State</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="text" name="state" class="form-control" value="<?php echo $_GET[state];?>" readonly></div></div></td>
                        </tr>
                        <input type="hidden" name="password" value="<?php echo $_GET[fghttt];?>">
                        <tr>
                            <td>Enter OTP</td>
                            <td><div class="col-md-12">
                                <div class="single_field"><input type="number" name="otp" class="form-control"></div></div></td>
                        </tr>
                        
                        
                    </table>
                            
                            <div class="col-md-12">
                                <div class="submit_btn">
                                    <input type="text" hidden name="sadsad" value="<?php echo $fghsj;?>">
                                    <input type="submit" name="submitt_signup" class="boxed-btn3" value="Sign Up">
                                    
                                </div>
                            </div>
                        </div>
                    </form>
			</div>
			
		</div>
	</div>
<?php
          	if(isset($_POST[submit_signup]))
          	{
          		$d_id=$_POST[r_id]+8965668629;
          		$otp=rand(1000, 9999);
          		$enf=$otp+54152454465;
          		$dffs=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`=$_POST[r_id]");
                $saas=mysql_num_rows($dffs);
                if($saas!=0){
                    $d_id=$d_id;}else{$d_id=81465+8965668629;}
          		echo "<script>location.href='confirm_signup.php?dsafcgvjh=$d_id&name=$_POST[name]&dob=$_POST[dob]&email=$_POST[email]&mobile=$_POST[mobile]&jnfvfdbfdbfd=$enf&city=$_POST[city]&state=$_POST[state]&fghttt=$_POST[password]&didi=1;';</script>";
				
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

