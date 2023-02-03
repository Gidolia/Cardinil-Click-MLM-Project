<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cardinil || Account transtion</title>

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
                <h3>Your Account Balance</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            
            <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Account Balance</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                      <tr><th align="center"><h2><i class="fa fa-inr"></i> <?php echo $ibo_info[wallet]+0;?>/-</h2></th></tr>
                      
                      </tbody>
                    </table>
                &nbsp;<br>&nbsp;<br>                  </div>
                  </div>
                </div>
           
            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Withdrawal Amount</h2>
                    <div class="clearfix"></div>
                  </div>
                  
                    <form class="form-horizontal form-label-left">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control">
                          <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
                          
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" disabled>Submit</button>
                        </div>
                      </div>
                     </form>
                    </div>
                 
                </div>
            </div>
            </div>
            </div>

            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Share Transtion <small>Detail</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Transtion ID</th>
                          <th>Date/Time</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Amount</th>
                          <th>Type</th>
                          <th>After Balance</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php 
							   
$qul="SELECT * FROM `account_wallet_history` WHERE `ibo_id`='$_SESSION[ibo_id]'";
$queryl=mysql_query($qul);
while($fetchl=mysql_fetch_assoc($queryl))
{?>

                		   <tr>                                 
                                  <td><?php echo $fetchl[awh_id];?></td>
								  <td><?php echo $fetchl[date]." ".$fetchl[time];?></td>
                                 
                                  <td><?php echo $fetchl[from];?></td>
                                  <td><?php echo $fetchl[to];?> </td>
                                   <td><?php echo $fetchl[amount];?></td>
                                   <td><?php echo $fetchl[type];?></td>
                                  <td><?php echo $fetchl[a_bal];?> </td>
                                  
								  
                               
                              </tr>                          

               <?php }?></tbody>
			  <tr><th>Total</th><td></td><td></td><td></td><td></td><td></td><td><?php echo $ibo_info[wallet];?></td></tr>
                      
                    </table>
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
