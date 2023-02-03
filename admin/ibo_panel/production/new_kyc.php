<?php
include "config.php";?>

<table border="1">
    <tr>
        <th>ibo id</th><th>name</th><th>mobile</th><th>dob</th><th>city</th><th>state</th><th>Aadhar no</th><th>front img</th><th>back img</th>
    </tr>
<?php
$man=mysql_query("SELECT * FROM `ibo_kyc_adhar_data` WHERE `clear`='p'");
if(mysql_num_rows($man)>0)
{
    
    while($fg=mysql_fetch_assoc($man))
    {
    $nb=mysql_query("SELECT * FROM `ibo` WHERE `ibo_id`='$fg[ibo_id]'");
    $fffg=mysql_fetch_assoc($nb); 
    ?>
    <tr>
        <td><?php echo $fffg[ibo_id];?></td><td><?php echo $fffg[name];?></td><td><?php echo $fffg[mobile];?></td><td><?php echo $fffg[dob];?></td><td><?php echo $fffg[city];?></td><td><?php echo $fffg[state];?></td><td><?php echo $fg[adhar_no];?></td><td><?php echo $fg[adhar_front_img];?></td><td><?php echo $fg[adhar_back_img];?></td>
    </tr>
    
    
    
    
    
    
    
    <?php
    }
    
}

?>
</table>