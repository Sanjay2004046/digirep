<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'PASSWORD','digirep');

$username = $_POST['username'];
$pwd = $_POST['pwd'];

// $sql = "INSERT INTO `login` VALUES ( '$username', '$pwd')";
$query = "SELECT email,password FROM `login`;";
$result = mysqli_query($con, $query);
// $rs = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result)){
		if($row["email"]==$username and $row["password"]==$pwd){
			header('Location:student.html');
		}	
		else{
			echo '<script type="text/javascript">
				alert("Invalid username and password")
				window.location = "main.html";
			</script>';
		}
	}
	// header('Location: student.html');
	
}

?>