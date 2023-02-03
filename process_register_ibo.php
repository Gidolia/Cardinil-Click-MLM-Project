<?php
include "database_connect.php";
if(isset($_POST[submitt_signup]))
    {
        $otp=$_POST[sadsad]-8456456789852;
     
        if($otp==$_POST[otp])
        {
            $que="select max(ibo_id) as max from ibo";
            $r=mysql_query($que) or die("query not performed");
            if($r)
            {
                  $row=mysql_fetch_array($r);
                  $ibo_id=$row['max'];
                  $ibo_id=$ibo_id+1;
            }
      mysql_query("INSERT INTO `ibo` (`ibo_id`, `s_id`, `name`, `dob`, `mobile`, `a_mobile`, `email`, `addreass`, `city`, `state`, `country`, `n_name`, `n_dob`, `n_relation`, `enter_date`, `id_status`, `password`, `distributor`) VALUES ('$ibo_id', '$_POST[r_id]', '$_POST[name]', '$_POST[dob]', '$_POST[mobile]', '', '$_POST[email]', '', '$_POST[city]', '$_POST[state]', '', '', '', '', '$date', 'n', '$_POST[password]', 'n');")or die("sorry query fail please try again");
      
      $dd='welcome to cardinil, your user id = '.$ibo_id;
$dd = str_replace(' ', '%20', $dd);
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=income&smstype=TRANS&numbers='.$_POST[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
      echo "<script>alert('Sucess!! You Are register Sucessfully');
			location.href='sucess_register.php?ibo_id=$ibo_id';</script>";
      
      
        }
        else{
            echo "wrong otp";
            echo "<script>alert('Failed! you enter wrong otp');
			location.href='signup.php?r_id=$_POST[r_id]';</script>";
        }
    }
    ?>