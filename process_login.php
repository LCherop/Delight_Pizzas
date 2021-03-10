<?php
require_once("dbConnect.php");

if (isset($_POST["email"])) {
	$email = $_POST["email"];
}  
if (isset($_POST["passw"])) {
	$passw = $_POST["passw"];
}  
if (isset($_POST["userT"])) {
	$userT = $_POST["userT"];
}  

	$sql= "SELECT * FROM `users` WHERE `email` = '$email' AND `passW`= '$passw' AND `userT`= '$userT'";

	if (mysqli_query($conny,$sql)) {
		echo "Login Successful";
		if ($userT=="admin") {
			header("Location: adminPage.php");
		}
		elseif ($userT=="user") {
			header("Location: homepage.php");
		}
	}else{
		echo "Invald details" .mysqli_error($conny);
	}
?>