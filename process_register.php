<?php 
require_once("dbConnect.php");

if (isset($_POST["fName"])) {
	$fName = $_POST["fName"];
}  
if (isset($_POST["lName"])) {
	$lName = $_POST["lName"];
}  
if (isset($_POST["phoneNo"])) {
	$phoneNo = $_POST["phoneNo"];
}  
if (isset($_POST["email"])) {
	$email = $_POST["email"];
}  
if (isset($_POST["address"])) {
	$address = $_POST["address"];
}  
if (isset($_POST["passw"])) {
	$passw = $_POST["passw"];
} 
if (isset($_POST["userT"])) {
	$userT = $_POST["userT"];
}   


	$sql = "INSERT INTO `users` (`userId`, `userFname`, `userLname`, `phoneNo`, `email`, `Address`, `passW`, `userT`) VALUES (NULL, '$fName', '$lName', $phoneNo, '$email', '$address', '$passw', '$userT')";

	if (mysqli_query($conny,$sql)) {
		echo "Record Added Successfully";
		header("Location: login.php");
	}else{
		echo "Record not inserted" .mysqli_error($conny);
	}
?>