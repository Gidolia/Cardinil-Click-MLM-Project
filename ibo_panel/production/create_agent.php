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
    <title>Cardinil || LEVEL</title>

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
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

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
                <h3>Create Agent</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Select Agent to Create</h2>
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
                  <div class="x_content"><p>Convert User to Agent (you have to make them agent to start their own work)</p>
                      <?php 
                      $gbn=mysql_query("SELECT ibo_id FROM `ibo` WHERE `s_id`='$_SESSION[ibo_id]' AND `id_status`='y'");
                      $a=0;
                      while($rf=mysql_fetch_assoc($gbn))
                      {
                          $a++;
                      }
                      if($a>9)
                      {
                      ?>
                      
                      
                      
                      
                      
                      <?php
                      if(isset($_GET[s]))
                      {?>
                      <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>SUCESS!</strong> Agent Created Sucessfully
                  </div>
                          
                      <?php }
                      if(isset($_GET[f]))
                      {?>
                          <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Fail!</strong> Fail to create Agent Please Try Again
                  </div>
                      <?php }?>
                     <form class="form-horizontal form-label-left" method="post">
                      
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2">Select User</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select name="ibo_id" class="form-control">
                              <?php
        $g=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$_SESSION[ibo_id]' AND `distributor`='n'");
        
            while($d=mysql_fetch_assoc($g))
            { 
           
            ?>
            <option value="<?php echo $d[ibo_id];?>"><?php echo $d[name]."(".$d[ibo_id].")";?></option>
            
            <?php
            }?>
                          </select>
                          <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
                          
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <input type="submit" class="btn btn-success" name="create" value="Create Agent">
                        </div>
                      </div>
                     </form>
                    <?php }
                    else{ ?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Not Qualified!</strong> You Should Open 10 Account to Create Agent
                  </div>
                  
                      
                    <div class="col-md-12">
                       
                      <div class="progress">
                        <div class="progress-bar progress-bar-info" data-transitiongoal="65"></div>
                      </div>
                    
                  </div>
                  Active Account Created = <?php echo $a+0;?>/10
                        
                    <?php }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <?php
            if(isset($_POST[create]))
            {
                $ibo_id=$_POST[ibo_id];
                $gc=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$ibo_id' AND `s_id`='$_SESSION[ibo_id]'")or die("sorry some problem occour");
                $nb=mysql_num_rows($gc);
                if($nb!=0){
                    $dc=mysql_fetch_assoc($gc);
                    mysql_query("UPDATE `ibo` SET `distributor` = 'y' WHERE `ibo`.`ibo_id` = $ibo_id;")or die("sorry some problem occour");
                    mysql_query("UPDATE `ibo` SET `pin_level` = '1' WHERE `ibo`.`ibo_id` = $ibo_id;")or die("sorry some problem occour");
                    mysql_query("UPDATE `ibo` SET `agent_start_date` = '$date' WHERE `ibo`.`ibo_id` = $ibo_id;")or die("sorry some problem occour");
                    mysql_query("UPDATE `ibo` SET `agent_start_time` = '$time' WHERE `ibo`.`ibo_id` = $ibo_id;")or die("sorry some problem occour");
                    echo "<script>alert('Sucess! Agent Created Sucessfully');
		location.href='create_agent.php?s=s';</script>";
                }else{
                    echo "<script>alert('Fail! Please Try Again');
		location.href='create_agent.php?f=f';</script>";
                }
            
                
            }
            ?>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Your Open Account</h2>
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
                      <p>Here only User are displayed which you have open and they are not working</p>
                     <?php
        $gd=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$_SESSION[ibo_id]'");
        
        ?>
        <table class="table table-striped table-bordered">
            <thead><tr><th>Sr. no.</th><th>User ID</th><th>ID Status</th><th>Name</th><th>Mobile</th><th>Position</th></tr></thead>
            <?php
            $a=0; 
            $g=0;
            $r=0;
            while($d=mysql_fetch_assoc($gd))
            { $a++;
            if($d[id_status]=='y'){$lk="<font color='green'>ID Activated</font>";
                $g++;
            }
            else{$lk="<font color='red'>Not Activated</font>";
                $r++;
            }
            $fddd=mysql_query("SELECT * FROM `pin_level` WHERE `pl_id`='$d[pin_level]';");
            $fggg=mysql_fetch_assoc($fddd);
            ?>
            <tr>
                <td><?php echo $a;?></td>
                <td><?php echo $d[ibo_id];?></td>
                <td><?php echo $lk;?></td>
                <td><?php echo $d[name];?></td>
                <td><?php echo $d[mobile];?></td>
                <td><?php echo $fggg[name];?></td>
            </tr>
            <?php
            }?>
        </table>
        <h3>Active ID = <?php echo $g;?></h3>
        <h3>Not Active ID = <?php echo $r;?></h3>
        <h3>Total ID = <?php echo $a;?></h3>
        
        
                    
                    
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
