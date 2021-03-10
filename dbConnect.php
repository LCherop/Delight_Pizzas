<?php
$servername="localhost";
$username= "root";
$passW="";
$dbName = "delight_pizzas";
//Create connection
$conny =  mysqli_connect($servername,$username,$passW,$dbName);

if($conny){
	echo "Connected Successfully";
}else{
	echo "Connection was unsuccessful" .mysqli_connect_error();
}


?>