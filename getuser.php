<?php
$q = intval($_GET['q']);
include "database_connect.php";
$dff=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`=$q");
$sds=mysql_fetch_assoc($dff);
$f=mysql_num_rows($dff);
if($f!=0)
{
echo "&nbsp;Referal name = ".$sds[name];
}?>