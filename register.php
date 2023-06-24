<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function register(){
         
            var uname,email,pword;
            uname=document.getElementById("uname").value;
            email=document.getElementById("email").value;
            pword=document.getElementById("pword").value;
            
        
            // alert(email+uname+pword)
            // alert(pword)
             
           
            var xmlhttp=new XMLHttpRequest();
         
            
            xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status ==200){
                  
                    document.getElementById("user-response").innerHTML=this.responseText;
                   
                }
            };

            xmlhttp.open("GET","RegisterUser.php?uname="+uname+"&email="+email+"&pword="+pword,true);
           
            xmlhttp.send();
           
            
        }
        function checkEmail(){
            email=document.getElementById("email").value;
            var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("wrong-email").innerHTML=this.responseText;
                        
                        
                    }
                    };
                    xmlhttp.open("GET","CheckUser.php?newemail="+email,true);
                    xmlhttp.send();
        }
        function checkName(){
            name=document.getElementById("uname").value;
            var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("wrong-name").innerHTML=this.responseText;
                        
                        
                    }
                    };
                    xmlhttp.open("GET","CheckUsername.php?newname="+name,true);
                    xmlhttp.send();
        }
        function checkPassword(){
            password=document.getElementById("pword").value;
            var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("wrong-password").innerHTML=this.responseText;
                        
                        
                    }
                    };
                    xmlhttp.open("GET","CheckUserpassword.php?ppword="+ password,true);
                    xmlhttp.send();
        }
    </script>
</head>
<body>


    name:<input type=text name=uname id=uname onkeyup="checkName()">
    <div id="wrong-name"></div>
    email:<input type=text name=email id=email onkeyup="checkEmail()">
    <div id="wrong-email"></div>
    password:<input type=text name=pword id=pword onkeyup="checkPassword()">
    <div id="wrong-password"></div>
    <input type=button value="Register Now" name=submit onclick="register()">
    <div id="user-response">       
           </div>

    
</body>
</html>