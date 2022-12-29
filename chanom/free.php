<!DOCTYPE html>
<html>
<head>
	<title>Barcode</title>
	<style >
		
		html {
			background: url(https://www.crystalhearinguk.co.uk/staging/wp-content/uploads/2016/09/50-Beautiful-and-Minimalist-Presentation-Backgrounds-03.jpg) no-repeat center fixed;
			background-size: cover;
		}
	</style>
</head>
<body>
	<br><br><br><br><br><br><br><br>
	<center><font face="Bangna New" color="#8B4513" size="5"><h1>
		<?php
		include("connection.php");
		session_start();

		$sql10 = "SELECT * FROM `user` WHERE `Tel` = '".$_SESSION['user']."' ";
		$result1 = $conn->query($sql10);
		$data = mysqli_fetch_array($result1);

		if ($data['Stamp']<10) {
			header('location:interfaceuser.php');
		}

		else{

			$sql10 = "SELECT * FROM `user` WHERE `Tel` = '".$_SESSION['user']."' ";
			$result1 = $conn->query($sql10);
			$data = mysqli_fetch_array($result1);
			if ($result1->num_rows == 1) {

				$randomNumber = rand(10000,99999);
				$newstamp = $data['Stamp'] - 10;
				$sql1 = "UPDATE `user` SET `Stamp`='".$newstamp."',`Ran`='".$randomNumber."' WHERE `Tel` = '".$_SESSION['user']."'";
				$result = $conn->query($sql1);

				echo $randomNumber;
			}
		}
		?></h1>
		<br><a href="interfaceuser.php">ย้อนกลับ</a></font></center>
	</body>
	</html>