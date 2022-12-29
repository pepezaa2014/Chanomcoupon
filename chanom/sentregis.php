<?php
include("connection.php");
$user=$_POST['tel'];
$pass=$_POST['pass'];
$first=$_POST['first'];
$last=$_POST['last'];

$sql = "SELECT * FROM `user` WHERE `Tel` = '".$user."' ";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
	header('location:index.php');
}
else {
$sql1 = "INSERT INTO `user`(`Tel`, `Pass`, `ชื่อ`, `สกุล`, `Linetoken`, `Ran`) VALUES ('$user','$pass','$first','$last','','')";
$result = $conn->query($sql1);
echo "string";
header('location:index.php')
}
?>

