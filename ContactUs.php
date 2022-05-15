<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
<link href="//db.onlinewebfonts.com/c/b903a10cbd02c30f0de8a49886eddcc0?family=CooperBTW01-Bold" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Font Awsome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- header starts -->
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Brand</a> -->
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
        
                  </div>
              
                  <div class="collapse navbar-collapse navbar-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active">
                        <a href="index.html">Home</a></li>
                      <li><a id="about" href="aboutus.html">| About Us</a></li>
                      <li><a  id="contact" href="products.html">| Shop</a></li>
                      <li><a  id="shop" href="ContactUs.html">| Contact</a></li>
                    </ul>
                   
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=""><img src="images/profile.png" alt=""></a></li>
                        <li><a href=""><img src="images/Cart.png" alt=""></a></li>
                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
        

    </header>
    <!-- header ends -->

    

    <!-- BANNER STARTS -->


    <div class="contactbanner">
        <div class="contaier">
         <div class="row">
             <div class="col-md-12  contactMid">
                 <h1 class="h1Heading">Contact Us</h1>
            
             </div>
         </div>
        </div>
    </div>


    <!-- BANNER  ENDS -->


    <!-- CONTACT FORM AND MAPS -->


    <section>
        <h2 class="text-center">
            Feel Free to 
            contact us
        </h2>
        <div class="container contactInfo">
    
            
   
                <div class="col-md-8  divForm">
                  
                  <div class="formTop">
                    <h4 class="mt-5"> <strong> We'd live to hear from you</strong></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        
                  </div>
                    <div class="row">
                        <div class="col-md-6">
                        <form action="action.php" method="post">

                         <label for="inputName">Your Name</label>
                         <input name="name" type="text" class="form-control contact_input" placeholder="First Name" id="inputName"
                         aria-describedby="sizing-addon1">
                        </div>

                        <div class="col-md-6">
                         <label for="inputEmail">Your Email</label>
                         <input name="email" type="text" class="form-control contact_input" placeholder="First Name"  id="inputEmail"
                         aria-describedby="sizing-addon1">
                        </div>
                    </div>
                        <br>

                    <div class="row">
                        <div class="col-md-12">
                            <label name="message" for="txtMessage">Message</label>
                            <textarea class="form-control MessageArea" id="txtMessage" rows="5" placeholder="Your Message Here"></textarea>
                            
                            <button name="submit" class="btnSubmit">Submit</button>
                        </form>
                        </div>
                    </div>

                    </form>


                </div>

                <div class="col-md-1">

                </div>
                <div class="col-md-3 divSocialMedia">
                    <div class="row mediaIcons">
                    <h4 class="text-center " >
                        <strong>Contact Us</strong> </h4>

                    </div>
                    <div class="row mediaIcons">
                        <div class="col-md-12">
                            <a href="#" class="fa fa-facebook faicons"></a>
                            <h5>Find Us on facebook</h5>
                        
                        </div>
                        
                    </div>
                    <div class="row mediaIcons">
                        <div class="col-md-12">
                            <a href="#" class="fa fa-twitter faicons"></a>
                            <h5>Find Us on Twitter</h5>
                           
                        </div>
                        
                    </div>
                    <div class="row mediaIcons">
                        <div class="col-md-12">
                            <a href="#" class="fa fa-instagram faicons"></a>
                            <h5>Find Us on Instagram</h5>
                            
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <h4>
                          <strong>Address</strong>   
                         </h4>
                         <p>
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro.
                         </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- MAPS -->
    <section class="maps">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- MAP  -->  
            <h1 class="h1Heading text-center">Find us</h1>
            <div id="map-container-google-2" class="z-depth-1-half map-container mymap" style="height: 500px">
                <iframe src="https://maps.google.com/maps?q=karachi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                  style="border:2px " allowfullscreen width="100%" height="100%"></iframe>
          
          <!-- MAP -->
                </div>
            </div>
            
        </div>

    </section>
<!-- MAPS -->






    <!-- CONTACT FORM AND MAPS -->







  <!-- FOOTER STARTS -->
    
  <footer>
           
    <div class="container ">
        <div class="row">

         <div class="col-md-12 line">

         </div>
        </div>

        <div class="row Domain">
            <h5>
                @2022 <strong>Domain</strong> All Rights Resrved
            </h5>
        </div>

        <div class="row">
         <div class="col-md-12">
             <div class="footNav">

                 <ul>
                     <li><a>Home</a></li>
                     <li><a id="about2" href="aboutus.html">About us</a></li>
                     <li><a id="shop2" >Shop</a></li>
                     <li><a id="contact2" href="contactUs.html">ContactUs</a></li>
                 </ul>

             </div>
         </div>
        </div>
        

        </div>
    </div>
    <div id="SocialMediaIcons">
     <div id="twitter">
         <i  class="fa fa-twitter" aria-hidden="true"></i>
     </div>
     <div id="facebook">
         <i class="fa fa-facebook" aria-hidden="true"></i>
     </div>
     <div id="linkdin">
         <i class="fa fa-linkedin" aria-hidden="true"></i>
     </div>
 </div>
 </footer>

<!-- FOOTER ENDS -->







       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="js/bootstrap.min.js"></script>
   </body>


   
   </html>