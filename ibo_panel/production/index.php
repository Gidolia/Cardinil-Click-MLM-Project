<?php include "config.php";
include "functions.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../small_logo.jpg" type="image/ico" />

    <title>cardinil || Index</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {

      title:{
      text: "Your Joining in downline Chart"
      },
       data: [
      {
        type: "line",

        dataPoints: [
        <?php
      $t=array();
        $temp=array();
$temp1=array();
$sel1=mysql_query("SELECT `ibo_id`,`enter_date` FROM `ibo` WHERE `s_id`='$_SESSION[ibo_id]'") or die("value not selected");
while($fet1=mysql_fetch_assoc($sel1))
{
	$temp[]=$fet1[ibo_id];
	$t[]=$fet1[enter_date];
	//echo $fet1[enter_date];

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
for($x=0;$x<count($temp);$x++)
{
	$sel3=mysql_query("select ibo_id,enter_date from ibo where s_id=".$temp[$x]) or die("value not selected");
	while($fet3=mysql_fetch_assoc($sel3))
	{
		$temp1[]=$fet3[ibo_id];
		$t[]=$fet3[enter_date];
		//echo $fet3[enter_date];
	}
}
unset($temp);
$temp=array();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
for($x=0;$x<count($temp1);$x++)
{
	$sel5=mysql_query("select ibo_id,enter_date from ibo where s_id=".$temp1[$x]) or die("value not selected3.1");
	while($fet5=mysql_fetch_assoc($sel5))
	{
	
		$temp[]=$fet5[ibo_id];
		
		$t[]=$fet5[enter_date];
		//echo $fet5[enter_date];
	}
}
unset($temp1);
$temp1=array();
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





for ($rff = 0; $rff <= 32; $rff++)
{   
	for($x=0;$x<count($temp);$x++)
	{

	$sel13=mysql_query("select ibo_id,enter_date from ibo where s_id=".$temp[$x]) or die("value not selected");
	while($fet13=mysql_fetch_assoc($sel13))
	{
		
		$temp1[]=$fet13[ibo_id];
		
		$t[]=$fet13[enter_date];
		//echo $fet13[enter_date];
	}
	}
unset($temp);
$temp=array();
	  
	 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	  for($x=0;$x<count($temp1);$x++)
	  {
		 
		  $sel5=mysql_query("select ibo_id,enter_date from ibo where s_id=".$temp1[$x]) or die("value not selected3.1");
		  while($fet15=mysql_fetch_assoc($sel5))
		  {
			  $temp[]=$fet15[ibo_id];
			  $t[]=$fet15[enter_date];
			  //echo $fet15[enter_date];
	
		  }
	  }
unset($temp1);
$temp1=array();
}
/*
if($_GET[time]==7){$datecd = date("Y-m-d");  $datecd = date ("Y-m-d", strtotime("-7 day", strtotime($date))); $a="selected";
$dated= date ("Y-m-d", strtotime("-38 day", strtotime(date('Y-m-d')))); }
elseif($_GET[time]==30){$date = date("Y-m-d");  $date = date ("Y-m-d", strtotime("-30 day", strtotime($date))); $b="selected";
$dated= date ("Y-m-d", strtotime("-61 day", strtotime(date('Y-m-d')))); }
elseif($_GET[time]=='60'){$date = date("Y-m-d");  $date = date ("Y-m-d", strtotime("-60 day", strtotime($date))); $h="selected";
$dated= date ("Y-m-d", strtotime("-91 day", strtotime(date('Y-m-d')))); }
elseif($_GET[time]=='90'){$date = date("Y-m-d");  $date = date ("Y-m-d", strtotime("-90 day", strtotime($date))); $l="selected";
$dated= date ("Y-m-d", strtotime("-121 day", strtotime(date('Y-m-d')))); }

  else{ $d="selected";
  $sel1d=mysql_query("SELECT `enter_date` FROM `p_ia_ibo` WHERE `ibo_id`='$_SESSION[ibo_id]'") or die("value not selected");
$fet1d=mysql_fetch_assoc($sel1d);
	$df=$fet1d[enter_date];
  $sourcee = $df;
        $dateee = new DateTime($sourcee);
        $f=$dateee->format('20y-m-d');
        echo $f;
        $datecd = $f;
        $dated= date ("Y-m-d", strtotime("-7 day", strtotime(date('Y-m-d'))));}
	// End date
	*/
	$datecd = date ("Y-m-d", strtotime("-7 day", strtotime($date)));
	//echo $datecd;
	$end_date =date('Y-m-d');
	//echo $end_date;
   
   
	while (strtotime($datecd) <= strtotime($end_date)) {
	    
	$fg=0;
	
		
		for($x=0;$x<count($t);$x++)
	  {
	  if($t[$x]==$datecd){
			$fg++;}
		}
		$mm=date("m",strtotime($datecd));
		$dd=date("d",strtotime($datecd));
		$yy=date("y",strtotime($datecd));
		
		echo "{ x: new Date(20".$yy.", ".$mm.", ".$dd."), y: $fg },";
		$datecd = date ("Y-m-d", strtotime("+1 day", strtotime($datecd)));
		//echo $datecd;
		$dated = date ("Y-m-d", strtotime("+1 day", strtotime($dated)));
		}

		?>
     
        ]
      }
      ]
    });

    chart.render();
  }
	</script>

	<script src="canvasjs.min.js"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include "include/sidebar.php";?>

        <!-- top navigation -->
        <?php include "include/header.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="acc_balance.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-inr"></i><?php echo $ibo_info[acc_bal]+0;?></div>
                  <h3>Account Balance</h3>
                </div></a>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  
                 <a href="hold_wallet.php"> <div class="count"><i class="fa fa-inr"></i><?php echo $ibo_info[hold_wallet]+0;?> </div>
                  <h3>Holding Wallet</h3>
                </div></a>
              </div>
              <?php
              $y_date=date('Y-m-d', strtotime('-1 day', strtotime($date)));
              $am=0;
              $mnbv=mysql_query("SELECT * FROM `hold_wallet_history` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `date`='$y_date'");
              while($sccsc=mysql_fetch_assoc($mnbv))
              {
                  $am=$am+$sccsc[amount];
              }
              
              
              ?>
              
              
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <div class="count"><i class="fa fa-inr"></i><?php echo $am;?></div>
                  <h3>Yesterday Income</h3>
                </div>
              </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Basic Information</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <?php 
                      $rvbn=mysql_query("SELECT * FROM `pin_level` WHERE `pl_id`='$ibo_info[pin_level]'");
                      $rvbnd=mysql_fetch_assoc($rvbn);
                      ?>
                      <table class="table">
                        <tr>
                          <th>Post</th>
                          <th><?php echo $rvbnd[name];?></th>
                          
                        </tr>
                        <tr>
                          <th>KYC</th>
                          <th><?php echo $ibo_info[kyc];?></th>
                          
                        </tr>
                      
                        <tr>
                          <th>ID Activate</th>
                          <td><?php echo $ibo_info[id_status];?></td>
                        </tr>
                        <tr>
                          <th>Profile</th>
                          <td>Completed</td>
                        
                        </tr>
                        <tr>
                          <th>Referal Link</th>
                          <td><textarea rows="5" cols="10" id="myInput" readonly>http://cardinil.com/signup.php?ibo_id=<?php echo $_SESSION[ibo_id];?> </textarea> <button onclick="myFunction()">Copy text</button></td>
                        
                        </tr>
                        
                        
                      
                    </table>
                    
                  </div>
                </div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Activation Link</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                      <h3>Link</h3>
                      <table class="table table-striped table-bordere jambo_table bulk_action">
                        
                          <tr>
                            <th class="column-title">Link 1</th>
                            <td class=" ">
                                <?php 
                                $ac_link=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `activate_link_no`= '5' AND `ibo_id`='$_SESSION[ibo_id]'");
                                $dcvds=mysql_num_rows($ac_link);
                                if($dcvds==0)
                                {?>
                                <a href="http://upstox.com/open-account/?f=RTGO">Click Here To Activate in Upstox</a>
                                <?php }
                                else{ echo "Completed";}?></td>
                          </tr>
                          
                          <tr>
                              <th>Link 2</th>
                              <td><?php 
                                $ac_link=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `activate_link_no`= '4' AND `ibo_id`='$_SESSION[ibo_id]'");
                                $dcvds=mysql_num_rows($ac_link);
                                if($dcvds==0)
                                {?>
                                  <a href="motilal_oswal_acc_open_detail.php">Click Here To Activate in motilal oswal</a><?php }
                                else{ echo "Completed";}?></td>
                          </tr>
                          <tr>
                              <th>Link 4</th>
                              <td></td>
                          </tr>
                          <tr>
                              <th>Submit Your Document Here</th>
                              <td><a href="kyc.php?h=1">Click here to submit Your Document</a></td>
                          </tr>
                          
                        
                        
                            
                         
                       
                      </table>
                    
                      
                   
                 </div>
              </div>
            </div>

            
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include "include/footer.php";?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
	
  </body>
</html>
