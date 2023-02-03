<?php
///////////////////activation link for Stoxkart
include "config.php";
if(isset($_POST[activate3_submit]))
{
    $sel=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$_POST[ibo_id]'");
    $df=mysql_fetch_assoc($sel);
    if($df[activate_link1]!='y')
    {
        echo "step1 started<br>";
        echo commission_ibo($_POST[d_id]);
        echo "step2 commission Distributed<br>";
        if($df[id_status]!='y')
        {
            echo "step2 started completed<br>";
        mysql_query("UPDATE `ibo` SET `id_status` = 'y' WHERE `ibo`.`ibo_id` = '$_POST[d_id]';")or die("its failed to activate id please contact programer");
        mysql_query("UPDATE `ibo` SET `id_status_date` = '$date' WHERE `ibo`.`ibo_id` = $_POST[d_id];")or die("its failed to register date please contact programer");
        mysql_query("UPDATE `ibo` SET `pin_level` = '1' WHERE `ibo`.`ibo_id` = '$_POST[d_id]';")or die("its failed to activate id please contact programer");
        echo "step Completed this pointed to thired step";
        }
        mysql_query("INSERT INTO `ibo_activate_link_history` (`ialh_id`, `ibo_id`, `activate_link_no`, `activate_link_name`, `date`) VALUES (NULL, '$_POST[d_id]', '3', 'Stoxkart', '$date');")or die("its failed to register activate link please contact proagramer and dont try it again");
        $fvbbbbn=$df[activate_link]+1;
        mysql_query("UPDATE `ibo` SET `activate_link` = '$fvbbbbn' WHERE `ibo`.`ibo_id` = $_POST[d_id];");
        
        echo "step3 update completed";
        echo "<script>alert('ID Activated Successfully and commission Distributed Successfully');
			location.href='ibo_info.php?ibo_id=$_POST[d_id]';</script>";
    }
}

function commission_ibo($d_id)
{
    date_default_timezone_set('Asia/Calcutta');
$time=date("h:i:sa");
$date=date("Y-m-d");
    $amount=0;
    ///////////////////level 0 amount 30
    mysql_query("INSERT INTO `hold_wallet_history` (`hwh_id`, `ibo_id`, `date`, `time`, `amount`, `type`, `broker_level`, `history_note`, `f_ibo_id`) VALUES (NULL, '$d_id', '$date', '$time', '30', '+', '0', 'own Commission by Stoxkart', '$d_id');")or die("sorry query fail lv0");
    $d=mysql_query("SELECT s_id,hold_wallet FROM `ibo` WHERE `ibo_id`='$d_id'")or die("sorry query fail lv0.1");
    $s=mysql_fetch_assoc($d);
    $c=mysql_num_rows($d);
    $amount=$s[hold_wallet]+30;
    mysql_query("UPDATE `ibo` SET `hold_wallet` = '$amount' WHERE `ibo`.`ibo_id` = $d_id;")or die("sorry query fail lv0.2");
    $amount=0;
    
    if($c!=0)
    {
    ///////////////////level 1 amount 80
    mysql_query("INSERT INTO `hold_wallet_history` (`hwh_id`, `ibo_id`, `date`, `time`, `amount`, `type`, `broker_level`, `history_note`, `f_ibo_id`) VALUES (NULL, '$s[s_id]', '$date', '$time', '80', '+', '1', 'LV1 Commission by Stoxkart', '$d_id');")or die("sorry query fail lv1");
    
    $df=mysql_query("SELECT s_id,hold_wallet FROM `ibo` WHERE `ibo_id`='$s[s_id]'")or die("sorry query fail lv1.1");
    $sf=mysql_fetch_assoc($df);
    $amount=$sf[hold_wallet]+80;
    $cf=mysql_num_rows($df);
    mysql_query("UPDATE `ibo` SET `hold_wallet` = '$amount' WHERE `ibo`.`ibo_id` = $s[s_id];")or die("sorry query fail lv1.2");
    $amount=0;
    
    
    
    if($cf!=0)
    {
    //////////////////level 2 amount 20
    mysql_query("INSERT INTO `hold_wallet_history` (`hwh_id`, `ibo_id`, `date`, `time`, `amount`, `type`, `broker_level`, `history_note`, `f_ibo_id`) VALUES (NULL, '$sf[s_id]', '$date', '$time', '20', '+', '2', 'LV2 Commission by Stoxkart', '$d_id');")or die("sorry query fail lv2");
    
    $dff=mysql_query("SELECT s_id,hold_wallet FROM `ibo` WHERE `ibo_id`='$sf[s_id]'")or die("sorry query fail lv2.1");
    $sff=mysql_fetch_assoc($dff);
    $cff=mysql_num_rows($dff);
    $amount=$sff[hold_wallet]+20;
    mysql_query("UPDATE `ibo` SET `hold_wallet` = '$amount' WHERE `ibo`.`ibo_id` = $sf[s_id];")or die("sorry query fail lv2.2");
    $amount=0;
    
    
    if($cff!=0)
    {
    //////////////////level 3 amount 10
    mysql_query("INSERT INTO `hold_wallet_history` (`hwh_id`, `ibo_id`, `date`, `time`, `amount`, `type`, `broker_level`, `history_note`, `f_ibo_id`) VALUES (NULL, '$sff[s_id]', '$date', '$time', '10', '+', '3', 'LV3 Commission by Stoxkart', '$d_id');")or die("sorry query fail lv3");
    $dfffe=mysql_query("SELECT s_id,hold_wallet FROM `ibo` WHERE `ibo_id`='$sff[s_id]'")or die("sorry query fail lv3.1");
    $sfffe=mysql_fetch_assoc($dfffe);
    $cfffe=mysql_num_rows($dff);
    $amount=$sfffe[hold_wallet]+10;
    mysql_query("UPDATE `ibo` SET `hold_wallet` = '$amount' WHERE `ibo`.`ibo_id` = $sff[s_id];")or die("sorry query fail lv3.2");
    $amount=0;
    
    
    
    if($cfffe!=0)
    {
    /////////////////level 4 amonut 5
    mysql_query("INSERT INTO `hold_wallet_history` (`hwh_id`, `ibo_id`, `date`, `time`, `amount`, `type`, `broker_level`, `history_note`, `f_ibo_id`) VALUES (NULL, '$sfffe[s_id]', '$date', '$time', '5', '+', '4', 'LV4 Commission by Stoxkart', '$d_id');")or die("sorry query fail lv4");
    $dfff=mysql_query("SELECT s_id,hold_wallet FROM `ibo` WHERE `ibo_id`='$sfffe[s_id]'")or die("sorry query fail lv4.1");
    $sfff=mysql_fetch_assoc($dfff);
    $cfff=mysql_num_rows($dfff);
    $amount=$sfff[hold_wallet]+5;
    mysql_query("UPDATE `ibo` SET `hold_wallet` = '$amount' WHERE `ibo`.`ibo_id` = $sfffe[s_id];")or die("sorry query fail lv4.2");
    $amount=0;
    
    }
    }
    }
    }
    
}
