<?php

include('backend\connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
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
    <!-- HEADEER ENDS -->



        <!-- BANNER STARTS -->
  
        <div class="productbanner">
            <div class="contaier">
             <div class="row">
                 <div class="col-md-12  ProductMid">
                     <h1 class="h1Heading">Our Products</h1>
                
                 </div>
             </div>
            </div>
        </div>
    
        <!-- BANNER  ENDS -->
    



        <!-- TABS WILL COME HERE -->

        <!-- TABS STARTS -->
        <!-- TABS ENDS -->



        <!-- PRODUCTS STARTS -->
    
        <section class="" >
            <div class="container">
                <div class="row ">
                    
                    <h3 class="text-center h3subHeading">
                        products
                    </h3>
                    <h1 class="h1Heading text-center">
                        Our Products
                    </h1>
                    <p class=" text-center">
                        Lorem ipsum dolor sit amet loremoris veniam consectetur Lorem ipsum dolor sit amet..
                    </p>
                    <p class=" text-center">
                        Lorem ipsum dolor sit amet loremoris veniam 
                    </p>
                              
                    
                    <div class=" rowTabs row">
                        <ul class=" tabs nav justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Necklece</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Rings</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Braceletes</a>
                            </li>

                          </ul>
                    </div>
    
                </div>
    

               

                <div class="row productDisplay">

                <!-- image Display using Php -->

                <?php
                $sql="SELECT * FROM tbl_products  LIMIT 0,12";   //Limit 4
                $result= mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    
                    $p_id=$row['id'];
                    $p_name=$row['name'];

                    // This whole php code can also be put in the function as well and then we will only call the funcion more effective way!!  

                    ?>
                
                 <!-- SET DEDEFAULT HEIGHT AN DWIDTH TO DISPLAY ALL TYPES OF IMAGE IN ONE FORMATE -->



                    <div class="col_Products col-md-3 col-sm-6 col-xs-12">
                    <?php   echo"<img src='uploaded_Image/".$row['image_path']."'>";?>
                    <?php  echo "   <h3>".$row['name']." </h3>" ?>
                    <?php  echo "   <h3>".$row['price']." </h3>" ?>  
                  <a href="DetailsPage.php">  <button type="submit" name="btnDetails " class="btndetails btnReview">Details</button> </a>
                     
                        <!--producr name detail will also be fetched from data base -->

                        
                    </div>
                    <?php }?>

                    <!-- this PHP code will be applied on only one colum because as the product or images increases it will keep adding the colum by it self an in the same manner rows wil be added  -->
                   
                </div>

                
             

                <!-- End of PHP CODE -->
             
                
                <div class="col-md-12">
                    
<div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a class="active" href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
  </div>
  
                </div>
                
            </div>
        </section>
        <!-- PRODUCTS ENDS -->

        



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