<?php
include("connection.php");
session_start();
$user = $_POST['user'];
$password = $_POST['pass'];
$sql1 = "SELECT * FROM `admin` WHERE `User` = '".$user."' AND `Pass` = '".$password."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);
if ($result->num_rows == 1) {
	header('location:interfaceadmin.php');
}
else
	echo "Your Username or Password is wrong."."<br/>";
?>