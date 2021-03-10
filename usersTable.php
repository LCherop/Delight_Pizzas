<!DOCTYPE html>
<html>
<head>
	<title>Delight Pizzas|Users</title>
	<link rel="stylesheet" type="text/css" href="styleHP.css">
	<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #0000ff;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: white;
			color: black;
		}
		tr:nth-child(even).{background-color: #f2f2f2}

	</style>
</head>
<body style="background-image: url(back.jpg);">
	<header>	
		<div class="wrapper">
			<div class= "logo">
				<img src="logo.jpg">
			</div>
			<ul class="nav-area">
				<li><a href="usersTable.php" style="background-color: yellow">Users</a></li>
				<li><a href="#">Stock</a></li>
				<li><a href="#">Finances</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
	</header>
	<fieldset style="background-color: white">
		
			<?php 
			require_once("dbConnect.php");
			$q = "SELECT `userId`,`userFname`,`userLname`,`phoneNo`,`email`,`Address`,`userT` FROM `users` WHERE `userT`='user'";
			$result= mysqli_query($conny,$q);
			echo "<table border='1'>
				<tr>
				<th>userId</th>
				<th>userFname</th>
				<th>userLname</th>
				<th>userPhoneNo</th>
				<th>userEmail</th>
				<th>userAddress</th>
				<th>userType</th>
				</tr>
				";
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$row['userId']."</td>";
					echo "<td>".$row['userFname']."</td>";
					echo "<td>".$row['userLname']."</td>";
					echo "<td>".$row['phoneNo']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['Address']."</td>";
					echo "<td>".$row['userT']."</td>";
					echo "</tr>";
					# code...
				}
				echo "</table>";

			?>
	</fieldset>

	<div class="links">
	<div class="extras">
		<ul>
			<li><i class="fa fa-truck" aria-hidden="true"></i><a href="#">Deliveries</a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">Contact Us</a></li>
			<li><a href="#">Terms and Conditions</a></li>
			<li><a href="#">Privacy</a></li>
			<li><i class="fa fa-copyright" aria-hidden="true"></i><a href="#">Delight Pizzas</a></li>
		</ul>
	</div>

	<div class="scmedia">
		<ul>
			<li><i class="fab fa-facebook-f"></i></li>
			<li><i class="fab fa-whatsapp"></i></li>
			<li><i class="fab fa-instagram"></i></li> 
			<li><i class="fab fa-pinterest"></i></li>
			<li><i class="fab fa-twitter-square"></i></li>
		</ul>
	</div>
	</div>
</body>
</html>

