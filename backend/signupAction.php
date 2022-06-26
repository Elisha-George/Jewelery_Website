<?php

include('connection.php');


if(isset($_POST['btnSignup']))
{
    $Firstname=$_POST['firstName'];
    $Lastname=$_POST['LastName'];
    $email=$_POST['email'];
    $phoneNumber=$_POST['phonenumber'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirm_password'];


$select= "select * from tbl_login where email = '$email'  && password = '$password' ";
//echo($select);

$result = mysqli_query($con, $select);



if (mysqli_num_rows($result) > 0){
    $error[]= 'The user is already exist';
    echo($error);
    
}   
// and if password is equls to confirm pasword
else{

    if($password==$confirmPassword)
    {

    $insert ="INSERT INTO `tbl_login`(`first_name`, `last_name`, `email`, `phoneNumber`, `password`) VALUES ('$Firstname','$Lastname','$email','$phoneNumber','$password')";
  $res =  mysqli_query ($con, $insert);

    if($res)
    {
        
        header('location:../signup.php');
    }
    else{
        echo "not inserted";
    }
   
}
else{
    $error[]= 'Your Password Does not match';


    }
    
}


}




?>