<?php
require_once("DBConn.php");
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$mobile = $_POST['mobile'];
$class = $_POST['class'];

$sql = "INSERT INTO student (name, email, pwd, class, phoneno) VALUES('" . $name . "','" . $email . "', '" . $pwd . "', '" . $class . "', '".$mobile."')";
if($conn->query($sql) === TRUE){
	header("location:studenthome.php");
}
else{
	echo "<script type='text/javascript'>alert('Sign Up Failed..Please Try again later');window.location='index.php'</script>";
}
?>