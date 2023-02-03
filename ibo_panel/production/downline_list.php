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

    <title>CARDINIL || Downline List</title>

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
                <h3>Downline Tree</h3>
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

<?php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : ' ';
}


function printtree($sponsor_no)
{
	if($sponsor_no==0)
	{$tr=$_SESSION[ibo_id];}else{$tr=$sponsor_no;}
$sel1=mysql_query("SELECT * FROM `ibo` WHERE `s_id`='$tr';") or die("value not selected1");
$c=mysql_num_rows($sel1);
if($c!=0){

while($fet1=mysql_fetch_assoc($sel1))
{
$game_date = $fet1['last_active_date'];
$game_time = $fet1['last_active_time'];

$combined_date_and_time = $game_date . ' ' . $game_time;?>
                        <tr>
                          <td><?php echo $fet1[ibo_id];?></td>
                          <td><?php 
                          if($fet1[id_status]=='y')
                          {
                              echo "<button type='button' class='btn btn-success'>Activated</button>";
                          }else{
                              echo "<button type='button' class='btn btn-danger'>Not Active</button>";
                          }
                          
                          ?>
                          
                          
                          </td>
                              
                              
                          <td><form action="ibo_detail.php" method="post">
                              <input type="hidden" name="ibo_id" value="<?php echo $fet1[ibo_id];?>">
                              <a href="#" onclick="this.parentNode.submit();"><?php echo $fet1[name];?></a>
                              
                          </form></td>
                          
                          <td><?php echo $fet1[enter_date];?></td>
                          
                          <td><?php echo time_elapsed_string($combined_date_and_time);?></td>
                          
                        </tr>

	<?php
	printtree($fet1[ibo_id]);
}
}
}
?>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Downline List</h2>
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
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>ID Status</th>
                          <th>Name</th>
                          <th>Join date</th>
                          <th>Last Active</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php echo printtree($_SESSION[ibo_id]);?>
                        
                        
                      </tbody>
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
