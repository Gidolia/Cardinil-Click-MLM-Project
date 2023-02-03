<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../../small_logo.jpg" type="image/ico" />
    <title>Cardinil</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            <?php include "include/sidebar.php";?>
            
          </div>
        </div>

        <!-- top navigation -->
        <?php include "include/header.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>IBO DETAIL</h3>
              </div>
            </div>

            <div class="clearfix"></div>

<?php
        $g=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$_POST[ibo_id]'");
        $gd=mysql_fetch_assoc($g);
        ?>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>IBO DETAIL</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        
                        
                              
        <table class="table table-striped table-bordered">
            <tr>
                <th>IBO ID</th><td><?php echo $gd[ibo_id];?></td>
            </tr>
            <tr>
                <th>IBO Name</th><td><?php echo $gd[name];?></td>
            </tr>
            <tr>
                <th>Holding Wallet Balance</th><td><?php echo $gd[hold_wallet]+0;?>/-</td>
            </tr>
            <tr>
                <th>Angel Broking Link Activate</th><td>
                <?php 
                              $momr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$gd[ibo_id]' AND `activate_link_no`='1'")or die("sorry some problem occour");
                              $mos=mysql_num_rows($momr);
                              if($mos==0)
                              { echo "<font color='red'>Not Completed</font>";}
                              else{ echo "<font color='green'>Completed</font>";}?></td>
            </tr>
            <tr>
                <th>Motilal Oswal Link Activate</th><td><?php 
                              $momr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$gd[ibo_id]' AND `activate_link_no`='4'")or die("sorry some problem occour");
                              $mos=mysql_num_rows($momr);
                              if($mos==0)
                              { echo "<font color='red'>Not Completed</font>";}
                              else{ echo "<font color='green'>Completed</font>";}?></td>
            </tr>
            <tr>
                <th>Stoxkart Link Activate</th><td><?php 
                              $momr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$gd[ibo_id]' AND `activate_link_no`='2'")or die("sorry some problem occour");
                              $mos=mysql_num_rows($momr);
                              if($mos==0)
                              { echo "<font color='red'>Not Completed</font>";}
                              else{ echo "<font color='green'>Completed</font>";}?></td>
            </tr>
            <tr>
                <th>Upstox</th><td></td>
            </tr>
          
        </table>
                    
                    
                    
                    
                  </div>
                </div>
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
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
