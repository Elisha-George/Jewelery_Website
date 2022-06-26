<?php
include('connection.php');
error_reporting(0);  
session_start();   


if(isset($_GET['product_id']))
{
    $product_id=$_GET['product_id'];
    $cust_name=$_SESSION['name'];
    $cust_email=$_SESSION['email'];


    $sql ="SELECT * FROM `tbl_products` WHERE id=$product_id";
    $Product_result= mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($Product_result)){
       
        $product_name = $row['name'];
        $product_price = $row['price'];
        }


    // echo $product_id.$product_name.$product_price.$cust_email;
    // echo "hello";

    $query="INSERT INTO `tbl_orders`(`ID`, `Orderd_by`, `Customer_email`, `Orderd_product`, `Product_price`) VALUES ('$product_id','$cust_name','$cust_email','$product_name','$product_price')";

    $result=mysqli_query($con, $query);
   


    
    
  
}
?>