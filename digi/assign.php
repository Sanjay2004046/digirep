<?php
$con = mysqli_connect('localhost','root','','simpleave');
$file=$_POST['assign'];
$maily=$_POST['maily'];
$sql="insert into assignment values('$maily','$dept','$file',1);";
$sql1="UPDATE users SET status=1 WHERE email = '$maily'";
$run=mysqli_query($con,$sql);
$run1=mysqli_query($con,$sql1);
if($run == true){
			
    echo "<script> 
            alert('Assignment Submitted');
            window.open('dashboard.php','_self');
          </script>";
}else{
    echo "<script> 
    alert('Failed To Approved');
    </script>";
}
?>