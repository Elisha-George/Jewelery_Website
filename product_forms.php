<?php
include ("backend/connection.php");
// include ("action.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Form</title>
</head>
<body>
<div class="container form">
    <div class="row">
<h1 class>STUDENT REGISTRATION FORM</h1>

    </div>
    <div class="row">
        <div class="col-md-12">


            <form action="backend/Product_action.php" method="post" enctype="multipart/form-data">
      

<label for="basic-url">name</label>
<div class="input-group"> 
  <input type="text" class="form-control" name="name" id="basic-url" aria-describedby="basic-addon3">
</div>


<label for="basic-url">price</label>
<div class="input-group">
  <input type="text" class="form-control" name="price" id="basic-url" aria-describedby="basic-addon3">
</div>

<label for="basic-url">Description</label>
<div class="input-group">
  <input type="text" class="form-control" name="description" id="basic-url" aria-describedby="basic-addon3">
</div>

<label for="basic-url">image</label>
<div class="input-group">
  <!-- <input type="image" class="form-control" name="path" id="basic-url" aria-describedby="basic-addon3"> -->

  <input type="file" alt="Submit"  name="file"  width="48" height="48">

</div>

<label for="basic-url">quantity</label>
<div class="input-group">
  <input type="text" class="form-control" name="quantity" id="basic-url" aria-describedby="basic-addon3">
</div>

<label for="basic-url">status</label>  //select box, Active and inactive
<div class="input-group">
  <input type="text" class="form-control" name="status" id="basic-url" aria-describedby="basic-addon3">
</div>


<br>
<button type="submit" name='upload'>Save Product</button>

</form>


        </div>

        


    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>