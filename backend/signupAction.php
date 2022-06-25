<?php

include ("connection.php");

if (isset($_POST['btnSignup'])) {
    
    $FirstName = $_POST['firstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['email'];
    $phoneNumber=$_POST['phonenumber'];
    $Password = $_POST['password'];
    $confirmPassword=$_POST['confirm_password'];
   

$select= "select * from signup where email = '$Email'  && password = '$Password' ";
//echo($select);

$result = mysqli_query($con, $select);



if (mysqli_num_rows($result) > 0){
    $error[]= 'The user is already exist';
    
}   
// and if password is equls to confirm pasword
else {

    $insert ="INSERT INTO signup(firstName, lastName, email, password) 
    VALUES ('$FirstName','$LastName','$Email','$Password')";
    mysqli_query ($con, $insert);

    if(mysqli_query($con,$insert))
    {
        echo "inserted";
    }
    else{
        echo "not inserted";
    }
}

}
?>