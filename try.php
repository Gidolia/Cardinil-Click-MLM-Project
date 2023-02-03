<?php include "database_connect.php";
/*$rf=mysql_query("SELECT * FROM `p_ia_ibo`; TRUNCATE `p_ia_ibo`;");
while($vb=mysql_fetch_assoc($rf))
{
    echo $vb(ibo_id);
}*/
$df=mysql_query("UPDATE `p_ia_ibo` SET `password` = '6' WHERE `p_ia_ibo`.`ibo_id` = '6';\ TRUNCATE `p_ia_ibo`; --")or die("sorry some query fail");
echo $df;
