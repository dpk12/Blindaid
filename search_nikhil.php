<?php 

$server="localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($server,$user,$pass,'iandeye');

$term="1";

$sql = "SELECT * from records WHERE vid='$term'";


$result=$conn->query($sql);
 $rows=$result->fetch_all(MYSQLI_ASSOC);
 $row="";
 
 foreach($rows as $row)
 {
 	//$output.='<p>'.$row["name"].'</p>';
 	echo '<div>
 			<h5>'.$row["title"].'</h5>
 			<h5>'.$row["subject"].'</h5>
 			<h5>'.$row["class"].'</h5>
 	</div>';
 }



?>