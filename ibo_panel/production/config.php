<?php

include "../../database_connect.php";
    $que=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `password`='$_SESSION[ibo_password]'");
    if(mysql_num_rows($que)==0)
    {
        echo "<script>alert('Invalid user name or Password');
        location.href='../../signin.php?ibo_id=$_SESSION[ibo_id]';</script>";
    }else
    $ibo_info=mysql_fetch_assoc($que);
    if($ibo_info[profile_update]=='y')
    {$profile_update=1;
    }else{$profile_update=0;}
    mysql_query("UPDATE  `ibo` SET  `last_active_time` =  '$time' WHERE  `ibo`.`ibo_id` =  '$_SESSION[ibo_id]';")or die("sorry1");
	mysql_query("UPDATE  `ibo` SET  `last_active_date` =  '$date' WHERE  `ibo`.`ibo_id` =  '$_SESSION[ibo_id]';")or die("sorry");
?>