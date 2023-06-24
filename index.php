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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6f3e3132dd.js" crossorigin="anonymous"></script>
</head>
<script>
        function register(){
         
         
            var uname,email,phone,course,year,current;
            uname=document.getElementById("uname").value;
            email=document.getElementById("email").value;
            phone=document.getElementById("phone").value;
            course=document.getElementById("course").value;
            year=document.getElementById("year").value;
            current=document.getElementById("current").value;
            var xmlhttp=new XMLHttpRequest();
         
            
            xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status ==200){
                 
                      //alert(this.responseText);
                    document.getElementById("user-response").innerHTML=this.responseText;
                   
                }
            };
           
            xmlhttp.open("GET","RegisterUser.php?uname="+uname+"&email="+email+"&phone="+phone+"&course="+course+"&year="+year+"&current="+current,true);
           // alert("hello");
           
            xmlhttp.send();
           
            
        }
        function checkEmail(){
          alert("hello")
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
            uname=document.getElementById("uname").value;
            var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("wrong-name").innerHTML=this.responseText;
                        
                        
                    }
                    };
                    xmlhttp.open("GET","CheckUsername.php?newname="+uname,true);
                    xmlhttp.send();
        }
        function checkPhone(){
            phone=document.getElementById("phone").value;
            var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("wrong-phone").innerHTML=this.responseText;
                        
                        
                    }
                    };
                    xmlhttp.open("GET","CheckUserphone.php?newphone="+ phone,true);
                    xmlhttp.send();
        }
    </script>
<body>
    

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-red" style="background: rgb(13,93,233); 
    background: linear-gradient(90deg, rgba(13,93,233,0) 0%, rgba(10,54,237,0.8499001895680147) 0%, rgba(6,21,69,1) 59%);">
        <div class="container-fluid" >
          <a class="navbar-brand"  href="#" class="navbar-own" style="color: white;">SSS Career</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="color: white;margin-left:10px ;margin-right: 46px;" aria-current="page" href="#">Full stack Development </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"style="color: white;margin-left:10px ;margin-right: 40px;" href="#">Digital Marketing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white;margin-left:10px ;margin-right: 20px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
             
                <input class="btn btn-primary" type="submit" value="Sign Up">
            </form>
          </div>
        </div>
      </nav>  

      <!-- body -->

      <!-- big container -->
     <div class="big-container">
<div class="left-container">
  <h6 class= "container-h6">LEARN WHAT THE INDUSTRY DEMANDS</h6>
  <br>
  <h1 class="container-h1">Unlock your
    ‍dream tech job</h1><br>
    <h6 class= "container-h6">AI-powered, industry-oriented courses in software development and data science to land the tech job of your dreams.</h6><br>
    <button type="button" class="btn btn-light"  >Get Start</button><br><br>
    <div class="review">
        <div class="review-img">
<img src="img/62fa976005fa765eb88c6646_1.webp" width="50px" height="50px" alt="">
<img src="img/62fa97621e97ff3d26f15b2b_16.webp" width="50px" height="50px" alt="">
<img src="img/62fa9763120999263bd8157f_17-p-500.webp" width="50px" height="50px"alt="">
<img src="img/62fa97631ccb57907e3d6542_12-p-500.webp" width="50px" height="50px" alt="">
<img src="img/62fa97639c3c98b1dcb15e75_14.webp" width="50px" height="50px" alt="">

        </div>
        <div class="review-word">
            <i class="fa-solid fa-star fa-fade" style="color: #f4d510;"></i>
            <i class="fa-solid fa-star fa-fade" style="color: #f4d510;"></i>
            <i class="fa-solid fa-star fa-fade" style="color: #f4d510;"></i>
            <i class="fa-solid fa-star fa-fade" style="color: #f4d510;"></i>

            <h6 class="container-h6-review" >4.9
                from 1000+ reviews</h6><br>
        </div>
        </div>
        <h6 class= "container-h6">Get a job in 1500+ top product and service based companies globally</h6><br>
        <div class="company-img">
          <img src="img/airtel.png" class="company-img-class" alt="" width="80px" height="40px" style=" margin:20px 50px 20px 0px;">
          <img src="img/amazon.png" alt="" width="80px" height="40px" style="margin:20px 50px 20px 0px;">
          <img src="img/dream.svg" alt="" width="80px" height="40px" style="margin:20px 50px 20px 0px;">
          <img src="img/episo.png" alt="" width="80px" height="40px"style="margin:20px 50px 20px 0px;">
          <img src="img/flipkart.png" alt="" width="80px" height="40px" style="margin:20px 50px 20px 0px;">
          <img src="img/airtel.png" alt="" width="80px" height="40px" style="margin:20px 50px 20px 0px;">
          <img src="img/airtel.png" alt="" width="80px" height="40px" style="margin:20px 50px 20px 0px;">
          <img src="img/amazon.png" alt="" width="80px" height="40px" style="margin:20px 50px 20px 0px;">

        </div>
        <div class="highlight">
            <div class="hiring"  >
                <h3>1500+</h3>
                <h6>Hiring Partners</h6>
            </div>
            <div class="hiring" >
                <h3>1500+</h3>
                <h6>Hiring Partners</h6>
            </div>
            <div class="hiring" >
                <h3>1500+</h3>
                <h6>Hiring Partners</h6>
            </div>
            <div class="hiring" >
                <h3>1500+</h3>
                <h6>Hiring Partners</h6>
            </div>

        </div>

    

</div>


<div class="right-container">
  
  <div class="form" >
<h3 style="color: white;font-weight: bolder;">Book a 1:1 doubt clearing session with our experts</h3><br>
<h6 style="color: white;font-weight: bold;">Full name</h6>
<input type="text" class="input" name=uname id=uname onkeyup="checkName()" placeholder="Enter Your Full Name">
<div id="wrong-name"></div>
<br><br>
<h6 style="color: white;font-weight: bold;">Email</h6>
<input type="text"  class="input" name=email id=email onkeyup="checkEmail()  placeholder="yourname@gmail.com">
<div id="wrong-email"></div><br><br>
<h6 style="color: white;font-weight: bold;">Phone Number</h6>
<input type="text" class="input" name=phone  id=phone onkeyup="checkPhone()  placeholder="+91-9939802016">
<div id="wrong-phone"></div><br><br>
<h6 style="color: white;font-weight: bold;">Course of Interest</h6>
<select class="input" name=course id=course>
    <option  name=course id=course>Select One</option>
    <option name=course id=course>Full Stack Developer</option>
    <option name=course id=course>Digital Marketing</option>
</select><br><br>
<h6 style="color: white;font-weight: bold;">College passing out year</h6>
<select class="input" name=year id=year>
    <option aria-checked="">Enter the Graduation Year</option>
    <option>>2015</option>
    <option>2016</option>
    <option>2017</option>
    <option>2018</option>
    <option>2019</option>
    <option>2020</option>
    <option>2021</option>
    <option>2022</option>
    <option>2023</option>
    <option>2024</option>
    <option>2025</option>

</select><br><br>
<h6 style="color: white;font-weight: bold;">What are you doing currently?</h6>
<select class="input" name=current id=current>
    <option name=current id=current>Select One</option>
    <option name=current id=current>In College</option>
    <option name=current id=current>Working</option>
    <option name=current id=current>Unemployed-search of job</option>
</select><br><br>
<input type="checkbox"  > <h6 style="color: white;display: inline-flex;font-weight: bold;">you agree to our <a href="#"> privacy policy.</a></h6> 
<div class="d-grid gap-2 col-6 mx-auto"><br><br>
    <button class="btn btn-primary" width="100%"  type="button" name=submit onclick="register()">Register</button>
    <div id="user-response">       
           </div>

  </div>
</div>


</div>
     </div>

     <div class="big-container-2">
      <div class="title-big"><h5 class="why-sss">Why S Cube Internship</h5>
      <h1 ><h1 style="color: #1e56ff;text-decoration: underline;">Learning engineered</h1><h1>to fit the exact needs of the industry</h1>
    </div>
      <div class="cards">
        <div class="card" style="width: 18rem; background-color: black; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px; margin-top: 20px;margin-right: 30px; margin-left: 30px;">
          <div class="card-body">

            
            <h6 class="card-subtitle mb-2" style="color: white;font-weight: bold;" >AI-driven learning products</h6>
            <p class="card-text">AI-based IDE with real-time support and help, AI-based mock interviews, evaluation systems.</p>
            
          </div>
        </div>
        <div class="card" style="width: 18rem; background-color: black; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px; margin-top: 20px;margin-right: 30px; margin-left: 30px;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2" style="color: white; font-weight: bold;" >Experienced instructors and mentors</h6>
            <p class="card-text">Courses taught only by people who have already aced it! 1000+ tech professionals to guide you.</p>
            
          </div>
        </div>
        <div class="card" style="width: 18rem; background-color: black; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px; margin-top: 20px;margin-right: 30px; margin-left: 30px;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2" style="color: white;font-weight: bold;" >Lifetime placement assistance</h6>
            <p class="card-text">The journey does not end with the course! Avail Lifetime Placement Assistance as our alumnus.</p>
            
          </div>
        </div>
        <div class="card" style="width: 18rem; background-color: black; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 60px; margin-top: 20px;; margin-left: 55px;">
          <div class="card-body">
            <h5 class="card-title" ><img src="img/industry.svg" width="20px" height="20px" alt="">   </h5>
            <h6 class="card-subtitle mb-2" style="color: white;font-weight: bold;" >Industry-oriented curriculum</h6>
            <p class="card-text">An updated curriculum engineered to teach you only what the industry demands.</p>
            
          </div>
        </div>
        
        <div class="journey">
          <h6  style="color: white; font-weight: bold;">Get started on your journey towards unlocking hundreds of job opportunities with Newton School</h6><br>
          <input class="btn btn-primary" style="border-radius: 10px;" type="submit" value="Sign Up">
        </div>
        
       
      </div>
     </div>

     <div class="big-container1">
     <h3 class="image-title">SSS students work at top companies</h3>
     <div class="images-box">
      <img src="img/clever.webp" alt="" class="img-company" width="1000px" height="250px">
      
     </div>
     </div>



     <div class="big-container2">
      <h1 style="color: black;margin-left: 48px;margin-top: 20px;font-weight: bold;">Our offerings</h1>
      <div class="boxes">
      <div class="left-big-container2">
       <div class="img-title">
        <img src="img/da.webp" alt="" width="100px" height="100px" > <h4 style="font-weight: bold;">Professional Certificate Course in Digital Marketing</h4>
      </div><br>
        <p>A professional certificate course in full-stack development designed to help you get the best jobs in software development with a strong focus on DSA.</p><br>
        <ul style="list-style: none;">
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>Live online classes</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>Professional certificate</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>EMI from ₹5,500*</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i> Interview preparation</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>1500+ hiring partners</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i> No coding experience required</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i> 100% placement assistance</li>
        </ul>
        <div class="d-grid gap-2">
      
          <button class="btn btn-primary" type="button">Learn more  <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
        </div>


      </div>
      <div class="right-big-container2">
        <div class="img-title">
        <img src="img/f-logo.webp" alt="" width="100px" height="100px">  <h4 style="font-weight: bold;">Professional Certificate Course in Full stack web development</h4>
      </div><br>
        <p>A professional certificate course in full-stack development designed to help you get the best jobs in software development with a strong focus on DSA.</p><br>
        <ul style="list-style: none;">
          <li ><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>Live online classes</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>Professional certificate</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>EMI from ₹5,500*</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i> Interview preparation</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i>1500+ hiring partners</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i> No coding experience required</li>
          <li><i class="fa-solid fa-check fa-fade" style="color: #72e26a;"></i> 100% placement assistance</li>
        </ul>
        <div class="d-grid gap-2">
      
          <button class="btn btn-primary" type="button">Learn more  <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
        </div>

        
      </div>
    </div>
     </div>

     <div class="big-container3">
      <h6 style="margin-left: 75px; font-weight: bold;">Welcome to the outcome powerhouse</h6>
      <h1 style="margin-left: 75px; font-weight: bold;">Your recipe for a rockstar career</h1><br>
      <div class="container3">
      <div class="left-container3">
        <div class="boxes3">
          <div class="card" style="width: 18rem; background-color: #1654ca; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px;width: fit-content; margin-top: 20px;">
            <div class="card-body">
  
              
              <h6 class="card-subtitle mb-2" style="color: white;font-weight: bold;" >Personal guidance from mentors</h6>
              <p class="card-text">Get groomed by experienced software developers who are working in the top companies.</p>
              
            </div>
          </div>
          <div class="card"style="width: 18rem; background-color: #1654ca; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px;width: fit-content; margin-top: 20px;">
            <div class="card-body">
              
              <h6 class="card-subtitle mb-2" style="color: white; font-weight: bold;" >Dedicated placement team</h6>
              <p class="card-text">A team of warriors ensure your profile reaches top companies from our 1500+ partners.</p>
              
            </div>
          </div>
          <div class="card" style="width: 18rem; background-color: #1654ca; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px;width: fit-content; margin-top: 20px;">
            <div class="card-body">
              
              <h6 class="card-subtitle mb-2" style="color: white;font-weight: bold;" >Unlimited interview practice</h6>
              <p class="card-text">Gain confidence with unlimited mock interviews before the real interview.</p>
              
            </div>
          </div>
          <div class="card" style="width: 18rem; background-color: #1654ca; color: white; border: 1px solid white;border-radius: 10px;margin-bottom: 20px;width: fit-content; margin-top: 20px;">
            <div class="card-body">
              <h5 class="card-title" ></h5>
              <h6 class="card-subtitle mb-2" style="color: white;font-weight: bold;" >Lifelong alumni community </h6>
              <p class="card-text">Newton School does not end with the course. Your journey with us goes beyond any course.</p>
              
            </div>
          </div>
        </div>

      </div>
      <div class="right-container3">
   <img src="img/img.png" alt="" width="500px" height="500px">
      </div>
    </div>
     </div>



     <div class="reviews-box">
      <h6 style="font-weight:bold; text-align: center;">The S Cube Family</h6>
      <h3 style="font-weight:bold;text-align: center;">Be a part of the new-age tech generation</h3>
      <div class="student-review">
<!--  -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!--  -->
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
      <!--  -->
    </div>
    <div class="carousel-item">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
      <!--  -->
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">noorain</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
      <!--  -->
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
      <!--  -->
    </div>
    <div class="carousel-item">
      <!--  -->
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">ok</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
      <!--  -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--  -->
      </div>
     </div>


     <div class="news">
      <h3 style="text-align: center;">Making a buzz, for the right reasons</h3>
      <h1 style="text-align: center;">In the news</h1>
      <div class="news-img">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" style="display: flex;">
              <img src="img/Ani.png" class="d-block " width="150px" height="70px" style="margin-right: 30px;margin-left: 30px;" alt="...">
              <img src="img/Apn.png" class="d-block " width="150px" height="70px" style="margin-right: 30px;margin-left: 30px;" alt="...">
              <img src="img/brandz.png" class="d-block " width="150px" height="70px" style="margin-right: 30px;margin-left: 30px;" alt="...">
              <img src="img/economic-times.png" class="d-block " width="150px" height="70px" style="margin-right: 30px;margin-left: 30px;" alt="...">
              <img src="img/ThePrint.png" class="d-block " width="150px" height="70px" style="margin-right: 30px;margin-left: 30px;" alt="...">
              <img src="img/success.png" class="d-block " width="150px" height="70px" style="margin-right: 30px;margin-left: 30px;"alt="...">
              
            </div>
            <div class="carousel-item">
              <div class="carousel-item active" style="display: flex;">
            
              <img src="img/episo.png" class="d-block " width="150px" height="70px" style="margin-right: 20px;margin-left: 20px;" alt="...">
             </div>
            
            </div>
           
           
           
           
          
          
          
          
          </div>
          
        </div>
      
            
            </div>
          </div>
          <!-- footer -->
   <div class="footer">
    <div class="footer1">
      <h6 style="font-weight: bold;">SSS</h6> <h6 > Company</h6>

      <br>
    <br>
    <br>
    <div class="link-box">
    <h3>Follow us</h3>
    <div class="links">
      <a href="" ><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
      <a href="" ><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
      <a href="" ><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
      <a href="" ><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
    </div>
  </div>

    </div>
    <div class="footer2">
      <ul style="list-style: none;">
      <li style=" font-weight: bold" >Courses</li><br>
      <li >Professional Certificate Course in Full Stack Development</li>
      <li >Professional Certificate Course in Digital Marketing</li>
      <li >Professional Certificate Course in Data Science</li>
      <li >Professional Certificate Course in Cloud Application Internship</li>
      <li >Professional Certificate Course in Database Management Internship</li>
      
      <li >Professional Certificate Course in C++,Paython,etc</li>
      <li >Cybersecurity Internship</li>
     
    </ul>

      <br>
      <br>
      <ul style="list-style: none;">
      <li  style=" font-weight: bold" >More</li><br>
      <li >Teach at SSS</li>
      <li >Sign In</li>
      <li >Create Account</li>
    </ul>



    </div>
    <div class="footer3">
      <ul style="list-style: none;">
      <li  style=" font-weight: bold">Company</li><br>
      <li>About Us</li>
      <li>Blog</li>
      <li>Hire From Us</li>
      <li>Creers</li>
      <li>Contact</li>
    </ul>
    </div>
   </div>        
   <div class="bottom-footer">

   
      <p class="footerbasecolor">
        © Copyright 2023 <b>SSS</b> All Rights Reserved | <b>Terms and Conditions</b>|<b> Privacy Policy</b> | <b>Return Policy</b>
      </p>
  
   </div>

      

</body>
</html>