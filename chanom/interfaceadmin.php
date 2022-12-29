<!DOCTYPE html>
<html>
<head>
	<title>Interface Admin</title>
	<?php
	include("connection.php");
	session_start();
	?>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<style>
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
		html {
			background: url(https://dbon8wsz1nyjy.cloudfront.net/wp-content/uploads/2016/12/coffeedoor-11-584a790fb83a1.jpg) no-repeat center fixed;
			background-size: cover;
		}
		h1{
			color: #7FFFD4;
			font-family: Bangna New;
		}
	</style>
</head>
<body>
	<a href="des.php">ออกจากระบบ</a>
	<div class="box2">
		<center>
			<h1>ซื้อน้ำ</h1>
			<font size="4" color="#FFDAB9" face="Bangna New">
				<form action="sentnum.php" method="post">
					กรอกหมายเลขโทรศัพท์ <input type="number" name="tel" class="textbox"><br>
					จำนวนแก้ว <input type="number" name="num" class="textbox"><br><br>
					<div class="btn-group"><button class="button">ยืนยัน</button></div>
				</form>
				<br>
				<h1>ใช้คูปอง</h1>
				<form method="post" action="usefree.php">
					กรอกหมายเลขโทรศัพท์ <input type="number" name="telfree" class="textbox"><br>
					กรอกหมายเลขที่ได้รับ <input type="number" name="numfree" class="textbox"><br>
					<br><div class="btn-group"><button class="button">ยืนยัน</button></div>
				</form></font>
			</center>
		</div>
	</body>
	</html>