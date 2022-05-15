<?php
$servername="localhost";
$username="root";
$password="";
$database="web_project";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{

    die('error!!');

}
else{
    ?>
    <script>
        alert("connection Successfull !!");
    </script>
    <?php
}

?>