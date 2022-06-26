
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
                        <a href="index.html">Home</a></li>
                      <li><a id="about" href="aboutus.html">| About Us</a></li>
                      <li><a  id="contact" href="products.html">| Shop</a></li>
                      <li><a  id="shop" href="ContactUs.html">| Contact</a></li>
                    </ul>
                   
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="">Log-out</a></li> -->

                        
                        <li><a> <img src="images/profile.png" alt=""></a></li>
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


    <div class="cartBanner">
        <div class="contaier">
            <div class="row">
                <div class="col-md-12  cartMid">
                    <h1 class="h1Heading">Add To Cart</h1>

                </div>
            </div>
        </div>
    </div>


    <!-- BANNER  ENDS -->



    <!-- CART SECTION STARTS-->

    <section class="Cart">
        <div class="container">
            <!-- Cart headings -->
            <div class="row rowHead">
                <div class="col-md-6">
                    <h4><b>Products</b></h4>
                </div>
                <div class="col-md-2">
                    <h4><b>Price</b></h4>
                </div>
                <div class="col-md-2">
                    <h4><b>Quantity</b></h4>
                </div>
                <div class="col-md-2">
                    <h4><b>total</b></h4>
                </div>
            </div>

            <!-- product add and remove -->
            <div class="row rowProducts">
                <div class="col-md-6">
                    <img src="images/1stProduct.png" alt="" class="imgCart">
                    <p><b>Lorem ipsum dolor sit amet</b> </p>
                </div>
                <div class="col-md-2">
                    <h4>$130.00</h4>
                </div>
                <div class="col-md-2">
                    <div class="ProductQty">
                        <ul>
                            <li><button class="cartQty">-</button></li>
                            <li>
                                <input type="text" class=" cartQty form-control" value="1" min="{5" } max=""
                                    step="" required="required" title="">
                            </li>
                            <li><button class="cartQty">+</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">
                    <h4>$130.00</h4>
                </div>
                <div class="col-md-1">
                    <h4><b>X</b></h4>
                </div>
            </div>

               <!-- product add and remove -->
               <div class="row rowProducts">
                <div class="col-md-6">
                    <img src="images/3rdProduct.png" alt="" class="imgCart">
                    <p><b>Lorem ipsum dolor sit amet</b> </p>
                </div>
                <div class="col-md-2">
                    <h4>$130.00</h4>
                </div>
                <div class="col-md-2">
                    <div class="ProductQty">
                        <ul>
                            <li><button class="cartQty">-</button></li>
                            <li>
                                <input type="text" class=" cartQty form-control" value="1" min="{5" } max=""
                                    step="" required="required" title="">
                            </li>
                            <li><button class="cartQty">+</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">
                    <h4>$130.00</h4>
                </div>
                <div class="col-md-1">
                    <h4><b>X</b></h4>
                </div>
            </div>

           
               <!-- product add and remove -->
               <div class="row rowProducts">
                <div class="col-md-6">
                    <img src="images/2ndproduct.png" alt="" class="imgCart">
                    <p><b>Lorem ipsum dolor sit amet</b> </p>
                </div>
                <div class="col-md-2">
                    <h4>$130.00</h4>
                </div>
                <div class="col-md-2">
                    <div class="ProductQty">
                        <ul>
                            <li><button class="cartQty">-</button></li>
                            <li>
                                <input type="text" class=" cartQty form-control" value="1" min="{5" } max=""
                                    step="" required="required" title="">
                            </li>
                            <li><button class="cartQty">+</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">
                    <h4>$130.00</h4>
                </div>
                <div class="col-md-1">
                    <h4><b>X</b></h4>
                </div>
            </div>

               <!-- button -->
               <div class="row cartButtons">
                <div class="col-md-2">
                    <button class="btnCart">Continue Shopping</button>
                </div>
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <button  class="btnCart">Update Cart</button>
                </div>
                
            </div>
        </div>

           
    
           
        </div>
    </section>

    <!-- CART SECTION STARTS-->



     <!-- SHIPPING DETAILS -->

     <section>
        <div class="container">
            <div class="row">
              
                <!-- Truck -->
                <div class="col-md-3  ShippingBlocks" id="ship">
                    <div class="col-md-4">
                <i class="fa fa-truck" style="font-size: 33px;"></i>

                    </div>
                    <div class="col-md-8">
                        <h5>Free Shipping</h5>
                        <p>Sign up and get free shipping</p>
                    </div>
                </div>

                <!-- Dillevery -->

                <div class="col-md-3 ShippingBlocks" id="dilleveryBox">
                    <div class="col-md-4">
                        <i class="fa fa-truck" style="font-size: 33px;"></i>
    
                            </div>
                            <div class="col-md-8">
                                <h5>Free Shipping</h5>
                                <p>Sign up and get free shipping</p>
                            </div>
                </div>


                <!-- brst quality -->
                <div class="col-md-3 ShippingBlocks" id="Quality">
                    <div class="col-md-4">
                        <i class="fa fa-truck" style="font-size: 33px;"></i>
    
                            </div>
                            <div class="col-md-8">
                                <h5>Free Shipping</h5>
                                <p>Sign up and get free shipping</p>
                            </div>
                </div>

            </div>


         
    </section>


    <!-- SHIPPING DETAILS -->













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
                            <li><a id="shop2">Shop</a></li>
                            <li><a id="contact2" href="contactUs.html">ContactUs</a></li>
                        </ul>

                    </div>
                </div>
            </div>


        </div>
        </div>
        <div id="SocialMediaIcons">
            <div id="twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
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