<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'PASSWORD','digirep');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$role=$_POST['role'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `signup` VALUES ( '$fname', '$lname','$email','$pwd','$role','$phone')";
$sql1="INSERT INTO `login` VALUES ( '$email','$pwd')";
if($fname!="" and $lname!="" and $email!="" and $pwd!="" and $phone!=""){
	$rs = mysqli_query($con,$sql);
	$rs = mysqli_query($con,$sql1);
	if($rs)
	{
		header('Location: main.html');
	}

}
else{
	echo '<script type="text/javascript">
				alert("Kindly fill all fields")
				window.location = "signup.html";
			</script>';
}
// $rs = mysqli_query($con,$sql);
// $rs = mysqli_query($con,$sql1);


?>