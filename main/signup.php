<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'PASSWORD','digirep');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$phone = $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO `signup` (`fname`, `lname`, `email`, `password`, `phone`) VALUES ( '$fname', '$lname','$email','$pwd','$phone',)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: main.html');
	
}

?>