<!DOCTYPE html>
<html>
	<head>
			<title>Delight Pizzas|Login</title>
			<link rel="stylesheet" type="text/css" href="styler.css">
	</head>
	<body id = "b1" style="background-image: url(back.jpg);">
		<fieldset name ="f1">
				<center>
				<h1>Welcome To Delight Pizzas</h1>

				<h2 id="signIn">Sign In</h2>
		
				<form action="process_login.php" method="POST">
			 
					<p><label>Email</label>
					<input type="email" name="email"></p>
					<p><label>Password</label>
					<input type="Password" name="passw"></p>
					<p>
						<label>Log in as :</label>
						<select name="userT">
							<option value="admin">
								Administrator
							</option>
							<option value="user">
								Customer
							</option>
						</select>
					</p>
					
					<button type="submit">Log In</button>
					<button type="reset">Clear</button>
				</form>
				<p id ="p1"><a href="forgot.php">Forgot Password</a></p>

				<p>New to our page? </p>
				<p id ="p2"><a href="register.php">Register here</a></p>
				<p>Go bact to <a href="homepage.php">Home Page</a></p>
				</center>
		</fieldset>




	</body>
</html>


<? php
$servername="localhost";
$username= "root";
$passW="";

//Create connection
$conny = new mysqli($servername,$username,$passW);

if(mysqli_connect_error()){
	die("Connection faailed: ".mysqli_connect_error());
}


$conny->close();
?>