<?php
include('backend/signupAction.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/b903a10cbd02c30f0de8a49886eddcc0?family=CooperBTW01-Bold" rel="stylesheet" type="text/css" />
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
                                <a href="index.html">Home</a>
                            </li>
                            <li><a id="about" href="aboutus.html">| About Us</a></li>
                            <li><a id="contact" href="products.html">| Shop</a></li>
                            <li><a id="shop" href="ContactUs.html">| Contact</a></li>
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


    <div class="signupBanner">
        <div class="contaier">
            <div class="row">
                <div class="col-md-12  signupMid">
                    <h1 class="h1Heading">Sign Up</h1>

                </div>
            </div>
        </div>
    </div>


    <!-- BANNER  ENDS -->



    <!-- SIGNUP STARTS  -->

<!-- <?php
// print $Show_ErrorAlert;
// if($Show_ErrorAlert==true)
// {
    
// echo '<div class="alert alert-warning alert-dismissible" role="alert">
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
//  <strong>Warning! </strong> Ivalid Credentials, can not signin !!! </div>';
// }
?> -->

   




    <section class="signup_form">
        <div class="container">
            <div class="row no-gutter">

                <div class="col-md-5">
                    <img class="signupImage" src="images/loginImage-4.jpg" alt="">

                </div>

                <div class="col-md-5 signup_colum_form">

                    <form action="backend\signupAction.php" method="post">

                        <div class="col-md-7 signup_headCol">
                            <img class="LoginLogo" src="images/loginLogo.png.crdownload" alt="">

                            <h3 class="signupHead">Register Yourselef </h3>
                        </div>


                        


                        <div class="form-row  no-gutter">
                            <div class="col-md-7 col_inputDiv">
                                <input class="SignupInput" type="text" name="firstName" id="login_F_name class=" form-control" placeholder="First Name">
                            </div>
                        </div>

                        <div class="form-row  no-gutter">
                            <div class="col-md-7 col_inputDiv">
                                <input class="SignupInput" type="text" name="LastName" id="login_L_name" class="form-control" placeholder="lastname">
                            </div>
                        </div>
                        <div class="form-row  no-gutter">
                            <div class="col-md-7 col_inputDiv">
                                <input class="SignupInput" type="email" name="email" id="login_email" class="form-control" placeholder="John@gmail.com">
                            </div>
                        </div>
                        <div class="form-row  no-gutter">
                            <div class="col-md-7 col_inputDiv">
                                <!-- Patterns can also be added for telephone  umbers  pattern="// [0-9]{4}-[0-9]{7}  -->
                                <input class="SignupInput" type="tel" name="phonenumber" id="login_phone" class="form-control" placeholder="03**-*******">
                            </div>
                        </div>
                        <div class="form-row   no-gutter">
                            <div class="col-md-7 col_inputDiv">
                                <input class="SignupInput" type="password" id="login_pass" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-row   no-gutter">
                            <div class="col-md-7 col_inputDiv">
                                <input class="SignupInput" type="password" id="login_confirmpass" name="confirm_password" class="form-control" placeholder="Confirm Passwords">
                            </div>
                        </div>

                        <div class="form-row no-gutter">
                            <div class="col-md-7">
                                <button type="submit" name="btnSignup" id="btn_signup" class="btnlogin"> Signup</button>
                            </div>
                        </div>


                        <div class="form-row no-gutter forget_row">
                            <div class="col-md-7 col_forget">
                                <p class="forget">Already have an account? <a href="login.php">Login here</a></p>
                            </div>
                        </div>



                    </form>



                </div>

                
            </div>
        </div>
    </section>

    <!-- LOGIN OR SIGNUP ENDS  -->




    <!-- SHIPPING DETAILS -->
    <hr>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

<script>
    $(function() {
        $('#btn_signup').click(function() {

            swal({
  title: "Good job!",
  text: "You are successfully registered",
  icon: "success",
  button: "Aww yiss!",
});
        })
    });
</script>

</html>