<?php
include('connection.php');
session_start();

if (isset($_POST['btnlogin'])) {
	if (!empty($_POST['email']) && !empty('password')) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `tbl_login` WHERE `email` = '$email' AND `password` = '$password'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
		
			if ($row['email'] == $email && $row['password'] == $password) {
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['first_name'];
				$_SESSION['id'] = $row['id'];
				header('location:../index.php');


			} 
			else {
				header("Location: ../login.php?error=Please enter valid credentials");
				exit();
			}
		} else {
		}
	}
	else{
		header("Location: ../login.php?error= Please fill all the required fields");
				exit();
	}
}
