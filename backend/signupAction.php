<?php
include('connection.php');

if(isset($_POST['btnSignup']))
{
    $firstname        = $_POST['firstName'];
    $lastname         =$_POST['LastName'];
    $email            = $_POST['email'];
    $phone            = $_POST['phonenumber'];
    $password         = $_POST['password'];
    $confirmPassword  = $_POST['confirm_password'];

    echo "hello";
    


}
else{
echo "hii";
}



?>