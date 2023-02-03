<?php
include "database_connect.php";
/*$dd='**0charges IMPORTANT** sabhi ko inform kia jata hai ki is company dwara aap ke document sell kia ja rahe hai to kirpya apne document na de or kaam na kare';
$dd = str_replace(' ', '%20', $dd);
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=income&smstype=TRANS&numbers=8962250750&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);*/
$fg=mysql_query("SELECT * FROM `distributor`")or die("sorry some query fail");
while($tr=mysql_fetch_assoc($fg))
{
    $dd='**0charges IMPORTANT** sabhi ko inform kia jata hai ki is company dwara aap ke document sell kia ja rahe hai to kirpya apne document na de or kaam na kare';
$dd = str_replace(' ', '%20', $dd);
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=income&smstype=TRANS&numbers='.$tr[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
mysql_query("INSERT INTO `charges_sms` (`sf`, `d_id`, `name`, `report`, `mobile`) VALUES (NULL, '$tr[d_id]', '$tr[name]', '$response', '$tr[mobile]');")or die("query fail");
    echo $tr[d_id].", ".$tr[name].", ".$response."<br>";
}