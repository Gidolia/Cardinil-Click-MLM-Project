<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cardinil || Profile</title>
    <link rel="icon" href="../../small_logo.jpg" type="image/ico" />

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


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
                <h3>Profile</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Profile</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <?php
                    if($profile_update=='1'){$a="readonly";}?>
                     
                    <form class="form-horizontal form-label-left" method="post">
                      
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">IBO ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="ibo_id" value="<?php echo $_SESSION[ibo_id];?>" readonly>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">IBO Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="ibo_name" value="<?php echo $ibo_info[name];?>" readonly>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="mobile" value="<?php echo $ibo_info[mobile];?>" readonly>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alternative Mobile</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="a_mobile" data-inputmask="'mask' : '**********'" value="<?php echo $ibo_info[a_mobile];?>" <?php echo $a;?>>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Pan Card No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="pan_no" value="<?php echo $ibo_info[pan_no];?>" data-inputmask="'mask' : '**********'" <?php echo $a;?>>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">D.O.B</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="dob" class="form-control" value="<?php echo $ibo_info[dob];?>" required placeholder="YYYY-MM-DD" readonly>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> Father Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="f_name" value="<?php echo $ibo_info[father_name];?>" <?php echo $a;?> required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> Nominee Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nominee_name" value="<?php echo $ibo_info[n_name];?>" <?php echo $a;?> required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> Nominee D.O.B</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="n_dob" required value="<?php echo $ibo_detail[nominee_dob];?>" placeholder="YYYY-MM-DD" data-inputmask="'mask': '9999-99-99'" <?php echo $a;?>>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> Nominee Relation</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nominee_relation" required value="<?php echo $ibo_detail[n_relation];?>" <?php echo $a;?>>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> Addreass</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="addreass" required value="<?php echo $ibo_info[addreass];?>" <?php echo $a;?>>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> City</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="city" required value="<?php echo $ibo_info[city];?>" readonly>
                          <span class="fa fa-map form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                       <input type="text" class="form-control" name="state" value="<?php echo $ibo_info[state];?>" readonly required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="email" class="form-control" name="email" value="<?php echo $ibo_info[email];?>" required readonly>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <input type="submit" class="btn btn-success" value="Update Profile" name="submit_profile">
                        </div>
                      </div>
                     </form>

                    </div>
                  </div>
                </div>
            </div>
            </div>

            <?php
            if(isset($_POST[submit_profile]))
            {
                mysql_query("UPDATE `ibo` SET `a_mobile` = '$_POST[a_mobile]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `pan_no` = '$_POST[pan_no]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `f_name` = '$_POST[f_name]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `n_name` = '$_POST[nominee_name]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `n_dob` = '$_POST[n_dob]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `n_relation` = '$_POST[nominee_relation]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `addreass` = '$_POST[addreass]' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `profile_update` = 'y' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
                mysql_query("UPDATE `ibo` SET `profile_update_date` = '$date' WHERE `ibo`.`ibo_id` = $_SESSION[ibo_id];");
               

                echo "<script>alert('Profile Updated Sucessfully');
		location.href='profile_edit.php';</script>";
            }
            ?>
            
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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
