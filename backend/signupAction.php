<?php
$Show_ErrorAlert=""; //this is to avoide the 
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    include('connection.php');

    session_start();

    $Show_ErrorAlert=false;

    if (isset($_POST['btnSignup'])) {


        $firstname        = $_POST['firstName'];
        $lastname         = $_POST['LastName'];
        $email            = $_POST['email'];
        $password         = $_POST['password'];
        $confirmPassword  = $_POST['confirm_password'];


        // resolve the issue of  $exist variable because it is giving error!!

        $exists == false;

        if ($password == $confirmPassword && $exists==false) {

            $sql = "INSERT INTO tbl_login(first_name, last_name, email, password) VALUES ('$firstname','$lastname','$email','$password')";

            $result = mysqli_query($con, $sql);

             
        if ($result) {

            $Show_ErrorAlert==false;
        }

        }

    



       
        // if ($result) {

        //     header("location:..\loginDemo.php");
        // }
    }
}
