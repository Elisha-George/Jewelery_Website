
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Web</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
<link href="//db.onlinewebfonts.com/c/b903a10cbd02c30f0de8a49886eddcc0?family=CooperBTW01-Bold" rel="stylesheet" type="text/css"/>
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
                        <a href="index.php">Home</a></li>
                      <li><a id="about" href="aboutus.php">| About Us</a></li>
                      <li><a  id="contact" href="products.php">| Shop</a></li>
                      <li><a  id="shop" href="ContactUs.php">| Contact</a></li>
                    </ul>
                   
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="">Log-out</a></li> -->

                        
                      
                        <li><a href=""><img src="images/Cart.png" alt=""></a></li>
                        <li><a href="backend/logoutAction.php"><img src="images/logout.png" height="20rem" width="25rem" alt=""></a></li>

                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
        
    </header>
    <!-- header ends -->



    <!-- BANNER STARTS -->


    <div class="aboutbanner">
        <div class="contaier">
         <div class="row">
             <div class="col-md-12  aboutMid">
                 <h1 class="h1Heading">About Us</h1>
            
             </div>
         </div>
        </div>
    </div>


    <!-- BANNER  ENDS -->


    <!-- MAIN STARTS -->
    <section class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 leftPara"> <h4>
                About Us
            </h4>
        <h1 class="h1Heading">  Where Class </h1>
          
        <h1 class="h1Heading">Meets Glamour</h1>
        <br>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum magnam nam in quaerat beatae nobis quo vero illo? Odio assumenda facilis, quas pariatur dicta, in ad quis nam totam similique non expedita laudantium vel ea. Vitae modi debitis odio, impedit doloremque pariatur beatae quae ipsa delectus nisi ipsum dolore
            <p>
                veniam omnis minus optio? Explicabo maiores quod non? Officia, explicabo commodi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore fugit minus nemo ipsum mollitia sint temporibus quae blanditiis laboriosam doloribus repudiandae, vel hic aspernatur maxime. Voluptatibus voluptate consequuntur mollitia, suscipit ! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, mollitia. Perferendis impedit neque aperiam tempora ut officiis repudiandae illo quaerat nisi aspernatur exercitationem quidem, nihil id ab totam, cum placeat Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus odio soluta enim vitae possimus doloribus tempore repudiandae consequatur expedita blanditiis molestiae eligendi, voluptatem alias quos illo reiciendis! Dolorum, adipisci sequi? Lorem ipsum dolor sit amet consectetur adipisicing elitSm eum et consequatur vero eius nemo.

                <br><br>
                <button>Learn More</button>


            </p> 
        </p>
    </div>
            <div class="col-md-6 rightPic"> 
            <!-- images of product -->
            

            <img src="images/lock_key.png" alt="Locket Pic" height="600vh" width="350vh">
            </div>
        </div>
    </div>
</section>
    <!-- MAIN ENDS -->





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
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="js/bootstrap.min.js"></script>
   </body>
   
   </html>