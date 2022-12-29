<!DOCTYPE html>
<html>
<head>
	<title>Interface User</title>
	<?php
	include("connection.php");
	session_start();
	$path ='image/';
	$file_path[0] = "/chanom/CKW 2.jpg/";
	?>
	<style>
		h1{
			font: Supermaket;
			color: #EE6363;
		}
		html {
			background: url(https://cdn.wallpapersafari.com/68/5/iz2oju.jpg) no-repeat center fixed;
			background-size: cover;
		}
		.btn-group .button {
			background-color: #FFB90F; /* Green */
			border: #FFB90F;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: center;
			font-family: Supermarket;
			transition: .2s;
		}

		.btn-group .button:hover {
			background-color: #CD950C;
		}
	</style>
</head>
<body>
	<a href="des.php">Logout</a>

	<center><font face="Bangna New" size="4">
		<h1>Welcome Back</h1> <?php echo $_SESSION['first'] . " " . $_SESSION['last'];?><br><br>
		<?php


		$sql1 = "SELECT * FROM `user` WHERE `Tel` = '".$_SESSION['user']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);

		if ($data['Stamp']==0) {
			echo '<img src="images/stamp0.png">';
		}
		elseif ($data['Stamp']==1) {
			echo '<img src="images/stamp1.png">';
		}
		elseif ($data['Stamp']==2) {
			echo '<img src="images/stamp2.png">';
		}
		elseif ($data['Stamp']==3) {
			echo '<img src="images/stamp3.png">';
		}
		elseif ($data['Stamp']==4) {
			echo '<img src="images/stamp4.png">';
		}
		elseif ($data['Stamp']==5) {
			echo '<img src="images/stamp5.png">';
		}
		elseif ($data['Stamp']==6) {
			echo '<img src="images/stamp6.png">';
		}
		elseif ($data['Stamp']==7) {
			echo '<img src="images/stamp7.png">';
		}
		elseif ($data['Stamp']==8) {
			echo '<img src="images/stamp8.png">';
		}
		elseif ($data['Stamp']==9) {
			echo '<img src="images/stamp9.png">';
		}
		else
			echo '<img src="images/stamp10.png">';

		?>

		<br><br><br><div class="btn-group"><form action="free.php"><button class="button">กดใช้คูปอง</button></form></div>
	</font></center>
</body>
</html>



