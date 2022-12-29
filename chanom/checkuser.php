<?php
include("connection.php");
session_start();
$user = $_POST['user'];
$password = $_POST['pass'];
$sql1 = "SELECT * FROM `user` WHERE `Tel` = '".$user."' AND `Pass` = '".$password."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);
if ($result->num_rows == 1) {
	$_SESSION['user']=$_POST['user'];
	$_SESSION['first'] = $data['ชื่อ'];
	$_SESSION['last'] = $data['สกุล'];
	$_SESSION['stamp'] = $data['Stamp'];
	header('location:interfaceuser.php');
}
else
	echo "Your Username or Password is wrong."."<br/>";
?>