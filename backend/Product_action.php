<?php

include('connection.php');

if(isset($_POST['upload']))
{

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $file = ''; //initializing

    $quantity = $_POST['quantity'];
    $status = $_POST['status'];


    if(isset($_FILES['file']) AND $_FILES['file']['error']==0)
    {
        // The basename() function returns the filename from a path.
        // Syntax
        // basename(path, suffix)

                // Looking for data in array
        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "<pre>";


        $upload_dir = '../uploaded_Image/';
        $name = str_replace(' ','-', $_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir.$name);
        $file=$upload_dir.$name;

    }

    // die;

    $sql= "INSERT INTO tbl_products(name , price , description , image_path , quantity , status) VALUES ('$name', '$price', '$description', '$file', '$quantity', '$status')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        ?>
    
        <script>
        alert('Values are Successsfully Inserted !!');
        </script>
    
        <?php
        header("location:../product_forms.php");
    }
    else{
        ?>
    
        <script>
        alert('Data not inserted !!');
        </script>
    
        <?php
    }
    }
    

    // echo($sql);
    // $con->query($sql);

?>

