<?php include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CARDINIL | IBO detail</title>

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
                <h3>IBO Detail</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
<?php
$sas=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$_GET[ibo_id]';")or die("query fail");
$sa=mysql_fetch_assoc($sas);
?>



            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>IBO List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                     <table id="datatable" class="table table-striped table-bordered">
                          <tr><th>IBO ID</th><td><?php echo $sa[ibo_id];?></td></tr>
                          <tr><th>S ID</th><td><?php echo $sa[s_id];?></td></tr>
                          <tr><th>Name</th><td><?php echo $sa[name];?></td></tr>
                          <tr><th>DOB</th><td><?php echo $sa[dob];?></td></tr>
                          <tr><th>Mobile</th><td><?php echo $sa[mobile];?></td></tr>
                          <tr><th>A Mobile</th><td><?php echo $sa[a_mobile];?></td></tr>
                          <tr><th>email</th><td><?php echo $sa[addreass];?></td></tr>
                          <tr><th>City</th><td><?php echo $sa[city];?></td></tr>
                          <tr><th>State</th><td><?php echo $sa[state];?></td></tr>
                          <tr><th>Nominee Name</th><td><?php echo $sa[n_name];?></td></tr>
                          <tr><th>Nominee DOB</th><td><?php echo $sa[n_dob];?></td></tr>
                          <tr><th>Nominee Relation</th></th><td><?php echo $sa[n_relation];?></td></tr>
                          <tr><th>entry Date</th><td><?php echo $sa[enter_date];?></td></tr>
                          <tr><th>ID Status</th><td><?php echo $sa[id_status];?></td></tr>
                          <tr><th>ID Active Date</th><td><?php echo $sa[id_status_date];?></td></tr>
                          <tr><th>password</th><td><?php echo $sa[password];?></td></tr>
                          <tr><th>Profile Update</th><td><?php echo $sa[profile_update];?></td></tr>
                          <tr><th>profile update Date</th><td><?php echo $sa[profile_update_date];?></td></tr>
                          <tr><th>Pancard No</th><td><?php echo $sa[pan_no];?></td></tr>
                          <tr><th>Father Name</th><td><?php echo $sa[f_name];?></td></tr>
                          <tr><th>Hold Wallet</th><td><?php echo $sa[hold_wallet];?></td></tr>
                          
                          <tr><th>Active Link No.</th><td>
                              <?php echo $sa[activate_link];?></td></tr>
                          <tr><th></th></tr>
                          <tr><th>Angel Broking Activate</th>
                          <td>
                              <?php 
                              $abmr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$_GET[ibo_id]' AND `activate_link_no`='1'")or die("sorry some problem occour");
                              $ff=mysql_fetch_assoc($abmr);
                              echo "ialh_id=".$ff[ialh_id];
                              $abs=mysql_num_rows($abmr);
                              if($abs==0)
                              {
                              ?>
                              
                              <form action="process_activate_link1.php" method="post">
                            <input type="hidden" name="d_id" value="<?php echo $sa[ibo_id];?>">
                            <input type="submit" name="activate_submit" value="Activate Angel Broking">
                        </form>
                        <?php }?>
                          </td></tr>
                          <tr><th></th></tr>
                          <tr><th>UPstox Activate</th>
                          <td>
                              <?php 
                              $upmr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$_GET[ibo_id]' AND `activate_link_no`='2'")or die("sorry some problem occour");
                              $ffs=mysql_fetch_assoc($upmr);
                              echo "ialh_id=".$ffs[ialh_id];
                              $ups=mysql_num_rows($upmr);
                              if($ups==0)
                              {
                              ?>
                              <form action="process_activate_link2.php" method="post">
                            <input type="hidden" name="d_id" value="<?php echo $sa[ibo_id];?>">
                            <input type="submit" name="activate2_submit" value="UPstox Broking">
                        </form>
                        <?php }?>
                          </td></tr>
                          <tr><th></th></tr>
                          <tr><th>stockart Activate</th>
                          <td>
                              <?php 
                              $skmr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$_GET[ibo_id]' AND `activate_link_no`='3'")or die("sorry some problem occour");
                              $ffss=mysql_fetch_assoc($skmr);
                              echo "ialh_id=".$ffss[ialh_id];
                              $sks=mysql_num_rows($skmr);
                              if($sks==0)
                              {
                              ?>
                              <form action="process_activate_link3.php" method="post">
                            <input type="hidden" name="d_id" value="<?php echo $sa[ibo_id];?>">
                            <input type="submit" name="activate3_submit" value="Stockart Broking">
                        </form>
                        <?php }?>
                          </td></tr>
                          <tr><th></th></tr>
                          <tr><th>Motilal Oswal</th>
                          <td>
                              <?php 
                              $momr=mysql_query("SELECT * FROM `ibo_activate_link_history` WHERE `ibo_id`='$_GET[ibo_id]' AND `activate_link_no`='4'")or die("sorry some problem occour");
                              $ffsss=mysql_fetch_assoc($momr);
                              echo "ialh_id=".$ffsss[ialh_id];
                              $mos=mysql_num_rows($momr);
                              if($mos==0)
                              {
                              ?>
                              <form action="process_activate_link4.php" method="post">
                            <input type="hidden" name="d_id" value="<?php echo $sa[ibo_id];?>">
                            <input type="submit" name="activate4_submit" value="Motilal Oswal">
                        </form>
                        <?php }?>
                          </td></tr>
                          
                        
                      
                    </table>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © 2019 Cardinil. All Rights Reserved</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
