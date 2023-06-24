<?php
include 'config.php';

$uname=$_GET['uname'];

$email=$_GET['email'];
$phone=$_GET['phone'];
$course=$_GET['course'];
$passing=$_GET['year'];
$current=$_GET['current'];
if(($uname=="")||($email=="")||($phone=="")||($course=="")||($passing=="")||($current=="")){
    echo "<font color=red>please put values</font>";
}
else{


$sql="select * from registrationform where email='$email' and name='$uname' and phone='$phone'";
$result=$con->query($sql);
if($row=$result->fetch_assoc())
{
    echo "<font color=red>Record exist. Enter new value</font>";
}
else{
        $sql="insert into registrationform (name,email,phone,course,passingyear,currentstatus,date) values('".$uname."','".$email."','".$phone."','".$course."','".$passing."','".$current."',now())";
        $con->query($sql);
       // echo $sql;
    }
}
    
        
    
   

?>