<?php
include 'config.php';
    
$email = $_GET['newemail'];


$sql="select * from registrationform where email='$email'";
$result=$con->query($sql);
if($row=$result->fetch_assoc())
{
    echo "<font color=red>Email not available</font>";
}
?>


<!-- 

