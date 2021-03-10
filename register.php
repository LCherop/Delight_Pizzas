<!DOCTYPE html>
<html>
	<head>
		<title>Delight Pizzas|Registration</title>
		<link rel="stylesheet" type="text/css" href="styler.css">
	</head>
	<body id ="b3" style="background-image: url(back.jpg);">
		<center>
		<h1>Registration</h1>
		<fieldset id ="f2">
				<form action="process_register.php" method="POST">
					<ul>
					<p><label>First Name</label>
					<input type="text" name="fName" ></p>

					<p><label>Last Name</label>
					<input type="text" name="lName"></p>

					<p><label>Phone number</label>
					<input type="tel" name="phoneNo"></p>
					
					<p><label>Email</label>
					<input type="email" name="email"></p>

					<p>
						<label>Address</label>
						<input type="text" name="address">
					</p>

					<p><label>Set Password</label>
					<input type="password" name="passw"></p>
			
					<p><label>Confirm Password</label>
					<input type="password" name="passwC"></p>

					<p>
						<label>Register as :</label>
						<select name="userT">
							<option value="admin">
								Administrator
							</option>
							<option value="user">
								Customer
							</option>
						</select>
					</p>

					<button type="submit">Register</button>
					<button type="reset">Clear</button>
					</ul>
				</form>


				<p id = "p4">Go back to <a href="login.php" style="color: yellow">Login page</a></p>
		</fieldset>
		</center>


	</body>
</html>

