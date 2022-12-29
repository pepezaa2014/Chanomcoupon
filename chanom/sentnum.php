<?php
include("connection.php");
$sql = "SELECT * FROM `user` WHERE `Tel` = '".$_POST['tel']."' ";
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);

$newstamp = $data['Stamp'] + $_POST['num'] ;
echo $newstamp;

$sql1 = "UPDATE `user` SET `Stamp`='".$newstamp."' WHERE `Tel` = '".$_POST['tel']."'";
$result1 = $conn->query($sql1);

header('location:interfaceadmin.php');
?>