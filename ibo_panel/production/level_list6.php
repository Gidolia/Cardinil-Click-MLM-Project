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
    <title>Cardinil || Level View</title>

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
                <h3>Level</h3>
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
                    <h2>Level View Six</h2>
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
                        
                        
        <?php
        $temp=array();
        $temp1=array();
        $temp2=array();
        $m=0;
        $g=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$_SESSION[ibo_id]'");
        while($d=mysql_fetch_assoc($g))
        {
            $gt=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$d[ibo_id]'");
            while($dd=mysql_fetch_assoc($gt))
            {
                $gte=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$dd[ibo_id]'");
                while($dde=mysql_fetch_assoc($gte))
                {
                    $gtet=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$dde[ibo_id]'");
                    while($ddet=mysql_fetch_assoc($gtet))
                    {
                        $gtetm=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$ddet[ibo_id]'");
                        while($ddetm=mysql_fetch_assoc($gtetm))
                       {
                           $gtetme=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$ddetm[ibo_id]'");
                            while($ddetme=mysql_fetch_assoc($gtetme))
                           {
                                $temp[]=$ddetme[ibo_id];
                                $temp1[]=$ddetme[name];
                                $temp2[]=$ddetme[id_status];
                                $m++;
                           }
                       }
                    }
                }
            }
        }
        
        ?>
        <table class="table table-striped table-bordered">
            <thead><tr><th>Sr. no.</th><th>D ID</th><th>ID status</th><th>Name</th></tr></thead>
            <?php
            $a=0;
            for($x=0;$x<count($temp);$x++)
            { $a++; 
            if($temp2[$x]=='y'){$lk="<font color='green'>ID Activated</font>";}
            else{$lk="<font color='red'>Not Activated</font>";}
            ?>
            <tr>
                <td><?php echo $a;?></td><td><?php echo $temp[$x];?></td><td><?php echo $lk;?></td><td><?php echo $temp1[$x];?></td>
            </tr>
            <?php
            }?>
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
