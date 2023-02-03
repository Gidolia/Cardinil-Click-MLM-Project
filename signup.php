<?php include "database_connect.php";?>
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

	<script data-ad-client="ca-pub-4116205144661782" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

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
				<div class="col-md-6 animate-box">
					<h3>SIGN UP </h3>
					<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
function showUserm(str) {
    if (str == "") {
        document.getElementById("txtHinte").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHinte").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser_mobile.php?q="+str,true);
        xmlhttp.send();
    }
}
$(function() {
       $('form#delete').click(function(e) {
        e.preventDefault();
        var c = confirm("Click OK to continue?");
        if(c){
            $('form#delete').submit();
          }
      });
  });
</script>
					<form method="post">
					    
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Your Name" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">D.O.B</label>
								<input type="text" name="dob" class="form-control" placeholder="Your D.O.B" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Your Email" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Mobile</label>
								<input type="number" name="mobile" class="form-control" placeholder="Your Mobile Number" onkeyup="showUserm(this.value)" required>
								<div id="txtHinte">Mobile Verification</div>
							</div>
						</div>
					    <div class="row form-group">
							<div class="col-md-12">
								<label for="name">City</label>
								<input type="text" name="city" class="form-control" placeholder="Your City" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="state">State</label>
								<select name="state" class="form-control" required>
<option value="0">------------Select State------------</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" name="password"  class="form-control" placeholder="Your Password" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="Referal_id">Referal ID</label>
								<?php
                            $dff=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`=$_GET[ibo_id]");
$sds=mysql_fetch_assoc($dff);
if(mysql_num_rows($dff)!=0)
{
    $dsccddc="readonly";
}
?>
								<input type="number" name="r_id" class="form-control" placeholder="id" onkeyup="showUser(this.value)" value="<?php echo $sds[ibo_id];?>" <?php echo $dsccddc;?>>
							</div>
						</div>
						
						 <div id="txtHint"><?php echo "&nbsp;Referal name = ".$sds[name];?></div>

						
						<div class="form-group">
							<input type="submit" name="submit_signup" value="Sign Up" class="btn btn-primary">
						</div>

					</form>		
				</div>
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

