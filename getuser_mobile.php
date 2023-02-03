<?php
$q = intval($_GET['q']);
include "database_connect.php";
$dff=mysql_query("SELECT * FROM `ibo` WHERE `mobile`=$q");

$f=mysql_num_rows($dff);
if($f!=0)
{
echo "Mobile No. Not allowed its Already Register";
}

?>