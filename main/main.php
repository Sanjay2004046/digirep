<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'PASSWORD','digirep');

// get the post records
$username = $_POST['username'];
$pwd = $_POST['pwd'];

// database insert SQL code
$sql = "INSERT INTO `login` VALUES ( '$username', '$pwd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: student.html');
	
}

?>