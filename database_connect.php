<?php 
error_reporting(1);
mysql_connect("localhost","root","")or die("database not connected");
mysql_select_db("cardinil")or die("database not selected");
session_start();
date_default_timezone_set('Asia/Calcutta');
$time=date("h:i:sa");
$date=date("Y-m-d");
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ipad=get_client_ip();
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
mysql_query("INSERT INTO `site_open_info` (`soi_id`, `url`, `date`, `time`, `session_ibo_id`, `ip_addreass`) VALUES (NULL, '$url', '$date', '$time', '$_SESSION[ibo_id]', '$ipad');");
?>