<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<body><center>
	<div class="box2"><font face="Supermarket" size="3">
		<form method="post" action="checkadmin.php">
			<font color="#FFE4E1" size="5" ><h1>Admin</h1></font>
			<font color="#F0FFFF">Username : <input type="text" name="user" class="textbox" autofocus=""><br></font>
			<font color="#F0FFFF">Password : <input type="password" name="pass" class="textbox"><br></font><br><br>
			<div class="btn-group"><input type="submit" value="ยืนยัน" class="button"></div>
		</font></div></center>
	</form>
</body>
</html>