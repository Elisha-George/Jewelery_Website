
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
include('backend/detailsAction.php');
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

                        
                      <!-- <li><a> <img src="images/profile.png" alt=""></a></li> -->
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


    <!-- Landing BANNER STARTS -->


    <div class="Landingbanner">
        <div class="contaier">
            <div class="row">

            </div>
        </div>
    </div>


    <!--  landing BANNER  ENDS -->




    <!-- PRODUCT DISCRIPTION STARTS -->

    <!-- MAIN STARTS -->
    <?php

                $sql="SELECT * FROM `tbl_products` WHERE `id` = $product_id";   //Limit 4
                $result= mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                   

                    // This whole php code can also be put in the function as well and then we will only call the funcion more effective way!! 
                    $p_ID=$row['id'];
                    $p_name=$row['name'];
                    $desc=$row['description'];
                    $quantity=$row['quantity'];
                    $price=$row['price'];
                    $imagePath=$row['image_path'];
                    ?>
    <section class="main landingProducts">
        <div class="container">
            <div class="row">
                <div class="col-md-6 leftProduct">

                    <!-- flex would be a better option for css remember!! -->
                    


                    <div class="divProduct">
                        <?php echo" <img src='uploaded_Image/".$row['image_path']."'>"?>
                        <?php echo" <img src='uploaded_Image/".$row['image_path']."'>"?>

                    </div>
                </div>
           
            <div class="col-md-6 rightProductInfo">

            
          

              <?php echo "<h1 class='h1Heading'>  $p_name </h1>"?>  
              <?php echo "<h2 class='h2subHeading'> $ $price </h2>"?>  

                <br>
                <span class="fa fa-star fa-lg checked"></span>
                    <span class="fa fa-star fa-lg checked"></span>
                    <span class="fa fa-star fa-lg checked"></span>
                    <span class="fa fa-star fa-lg checked"></span>
                    <span class="fa fa-star fa-lg"></span>

                    <br>
                    <br>

                    <!-- description -->

                <h3 class="h3subHeading"> Description</h3>
               <?php   echo "<p> $desc</p>" ?>

                    <!-- Product Add -->
                    <div class="quantity">
                    <?php echo  " <h3 class='h3subHeading'>Quantity:  $quantity  </h3>" ?> 
                        
                        <!-- <button>-</button>
                        
                        <input type="number" name="" id="input" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
                        
                        <button>+</button> -->

                    </div>
                    <?php
                    }?>
                

                   
                    <i class="fa fa-truck" style="font-size: 25px;"></i>
                    <p class="shipping">Free Shipping within the country</p><br>
                    <i class="fa fa-tag" style="font-size: 25px;"></i>
                    <p class="tag">Authentic product and can be returned within 3 days</p>
        
                    <br>
            
                    <!-- SENDIND ALL THE DATA TO CART IN THE -->

                 <?php echo "<a href='cart.php?product_id=$p_ID '>  <button type='button class=btn btn-primary btn-lg btnShop'>Add to cart</button> </a>"?>


        
                </div>
        </div>
    </div>
    </section>
    <!-- PRODUCT DISCRIPTION ENDS -->


    <!-- BUTTONS -->
    <section class="secButtons">
    
    
    <div class="col-md-2 col-sm-4"> 
         <button type="button" class=" btn btn-primary btn-lg btnDiscription">Discriptions</button>
        </div>

        <div class="col-md-2 col-sm-4"> 
        <button type="button" class="btn btn-primary btn-lg btnReview">Reviews</button>
        
        </div>

        <div class="col-md-2 col-sm-4"> 
        
        <button type="button" class="btn btn-primary btn-lg btnInfo">additional info</button>

        </div>



              

        

    </section>

    
    <!-- BUTTONS -->


        <!-- PRODUCT DETAILS IN PARAGRAPH -->

        <section class="secDetails">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sint porro id! Unde accusamus ut, quis natus iusto, quia tempore quod cum, illo quas non ipsam modi? Sint veniam cumque distinctio dolores qui dolorum architecto aut quae porro. Veritatis culpa quasi quas quam exercitationem sed explicabo facilis magni maiores incidunt, nihil eos ullam deserunt nostrum voluptate ducimus eveniet laudantium. Et facilis fugit a asperiores dignissimos sunt ipsum dolor debitis ab mollitia. Eum nisi eius fuga molestias suscipit! Exercitationem, vel officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quibusdam eligendi. Numquam vel aliquam eaque voluptatum blanditiis delectus sapiente molestias commodi totam, a nulla inventore quibusdam ipsa explicabo obcaecati veritatis tempore dolores sint aperiam corrupti. Id reprehenderit, vel veritatis commodi architecto earum ullam perspiciatis iusto pariatur voluptate quas modi, illum dolorem vitae natus laborum reiciendis saepe sequi incidunt consequatur quidem repellendus voluptatum! Aperiam illo nesciunt natus soluta, ea optio officia earum accusantium consequatur perspiciatis inventore, assumenda doloremque iste, veniam explicabo?
                    </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCT DETAILS IN PARAGRAPH -->

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