
<?php

include('connection.php');

if(isset($_POST['btnlogin']))
{

    $email            = $_POST['email'];
    $password         = $_POST['password'];


    $sql="SELECT * FROM `tbl_login` WHERE email= '$email' AND password='$password'";

    $result= mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1)
    {
        echo "Successfully logged in";
    }

    if($result)
{
   
    header("location:..\loginDemo.php");
}

}




?>
