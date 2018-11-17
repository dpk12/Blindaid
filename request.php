<?php
require_once("DBConn.php");
session_start();
$sid = $_SESSION['sid'];
$title = $_POST['title'];
$sql = "INSERT INTO requests (sid, title) VALUES('" . $sid . "','" . $title . "')";
if($conn->query($sql) === TRUE){
	echo "<script type='text/javascript'>alert('Request sent successfully');window.location='studenthome.php'</script>";
}
?>