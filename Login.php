<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/b903a10cbd02c30f0de8a49886eddcc0?family=CooperBTW01-Bold" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .error{
        background-color: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
    }
</style>

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


    <div class="LoginBanner">
        <div class="contaier">
            <div class="row">
                <div class="col-md-12  loginMid">
                    <h2 class="h1Heading">Login </h2>

                </div>
            </div>
        </div>
    </div>


    <!-- BANNER  ENDS -->

    <?php
                        if(isset($_GET['error'])){
                        ?>
                        <p class="error"> <?php echo $_GET['error']; ?> </p>

                        <?php }?>




    <!-- LOGIN -->

    <section class="login_form">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-md-4 col_loginImage">
                    <img class="LoginImage" src="images/loginImage-4.jpg" alt="">

                </div>
                <div class="col-md-6 colum_form">

                    <form action="backend/loginAction.php" method="post">

                        <div class="col-md-6 col-xs-12 login_headCol">
                            <img class="LoginLogo" src="images/loginLogo.png.crdownload" alt="">

                            <h3 class="loginHead">Sign In To Your Account</h3>
                        </div>


                        <div class="form-row  no-gutter">
                            <div class="col-md-7 col-sm-12 col_email">
                            
                             <label for="loginEmail" class="loginLables">Email</label>   
                            <input class="loginInput" type="email" name="email" id="loginEmail" class="form-control" placeholder="John@gmail.com">
                            </div>
                        </div>

                        <div class="form-row   no-gutter">
                            <div class="col-md-7 col-sm-12 col_password">
                             <label for="loginpassword"  class="loginLables">Password</label>   
                            <input  class="loginInput" type="password" id="loginpassword" name="password" class="form-control" placeholder="**************">
                            </div>
                        </div>
                        
                    
                        <div class="form-row no-gutter">
                            <div class="col-md-7">
                                <button type="submit" name="btnlogin" class="btnlogin"> LogIn</button>
                            </div>
                        </div>

                
                       
                        </div>

                      

                    </form>



                </div>
            </div>
        </div>
    </section>

    <!-- LOGIN OR SIGNUP ENDS  -->









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