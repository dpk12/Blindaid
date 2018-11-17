<?php
require_once("DBConn.php");
session_start();
$email = $_POST['email'];
$pwd = $_POST['password'];
// echo $pwd;
// echo $email;

$sql=mysqli_query($conn,"select sid,email,pwd from student where email='".$email."' and pwd='".$pwd."'") or die(mysql_error());
$count = mysqli_num_rows($sql);
if($count>0){
	$row=mysqli_fetch_assoc($sql);
	$_SESSION['vid']=$row['vid'];
	header("location:volunteerhome.php");
	// echo $_SESSION['vid'];
	// echo "success";
}
else{
	
	echo "<script type='text/javascript'>alert('Invalid');window.location='index.php'</script>";
}
?>