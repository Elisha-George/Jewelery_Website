<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    
$sql="INSERT INTO contact_form(name,email,message) VALUES ('$name','$email','$message')";

    
$result = mysqli_query($con,$sql);

if($result)
{
    ?>

    <script>
    alert('Values are Successsfully Inserted !!');
    </script>

    <?php
    header("location:..\ContactUs.php");
}
else{
    ?>

    <script>
    alert('Data not inserted !!');
    </script>

    <?php
}
}

?>