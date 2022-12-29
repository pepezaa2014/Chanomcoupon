<!DOCTYPE html>
<html>
<head>
	<title>Welcome to EATTENTEA</title>
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

	</style>
</head>
<body>
	<center><div class="box2"><h1><font color="#FFDAB9" face="Supermarket" size="6">Welcome To EATTENTEA</font></h1><br>
		<form action="checkuser.php" method="post">
			<font size="5" color="#B2DFEE" face="Bangna New">เบอร์โทรศัพท์ <input type="text" name="user" autofocus="" class="textbox"><br></font>
			<font size="5" color="#B2DFEE" face="Bangna New">รหัสผ่าน <input type="password" name="pass" class="textbox"><br></font>
			<div class="btn-group">
				<br><a href="checkuser.php"><button class="button">เข้าสู่ระบบ</button></a><br>
			</div>
		</form>
		<br><a href="regis.php">สมัครสมาชิก</a><br>
		<a href="loginadmin.php">พนักงาน</a>
	</div>
</center>
</body>
</html>