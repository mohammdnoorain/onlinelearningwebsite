<?php
include 'config.php';
    
$phone = $_GET['newphone'];


$sql="select * from registrationform where phone='$phone'";
$result=$con->query($sql);
if($row=$result->fetch_assoc())
{
    echo "<font color=red>use another password||</font>";
}
?> 