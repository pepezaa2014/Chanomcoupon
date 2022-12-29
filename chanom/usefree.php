
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include("connection.php");
	$sql = "SELECT * FROM `user` WHERE `Tel` = '".$_POST['telfree']."'  ";
	$result = $conn->query($sql);
	$data = mysqli_fetch_array($result);

	if ($result->num_rows == 1) {
		if ($data['Ran'] == "") {
			echo "ยังไม่มีรหัสคูปอง";
		}
		else {
	$sql1 = "SELECT * FROM `user` WHERE `Tel` = '".$_POST['telfree']."' AND `Ran` = '".$_POST['numfree']."'";
	$result1 = $conn->query($sql1);
	$data1 = mysqli_fetch_array($result1);
	if ($result1->num_rows == 1) {
			$sql2 = "UPDATE `user` SET `Ran`= '' WHERE `Tel` = '".$_POST['telfree']."' AND `Ran` = '".$_POST['numfree']."'";
			$result2 = $conn->query($sql2);
			echo "ทำรายการสำเร็จ";
		}
		else
			echo "หมายเลขโทรศัพท์หรือรหัสที่ได้ไม่ถูกต้อง";
		}


	}
	else
		echo "หมายเลขโทรศัพท์หรือรหัสที่ได้ไม่ถูกต้อง";
	?>
	<br><a href="interfaceadmin.php">ย้อนกลับ</a>
</body>
</html>

