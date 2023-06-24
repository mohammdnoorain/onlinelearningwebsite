<?php
include 'config.php';
    
$uname = $_GET['newname'];


$sql="select * from registrationform where name='$uname'";
$result=$con->query($sql);
if($row=$result->fetch_assoc())
{
    echo "<font color=red>Name already registered</font>";
}
?> 