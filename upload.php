<?php
require_once("DBConn.php");
session_start();
$title = $_POST['title'];
$class = $_POST['class'];
$subject = $_POST['subject'];
$vid = $_SESSION['vid'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if($_FILES["fileToUpload"]["size"] > 50000000 and $uploadOk ==1 ){
    echo "sorry file size exceeds 50MB";
    $uploadOk = 0;
}

if($uploadOk == 1){
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

$sql = mysqli_query($conn, "INSERT INTO records (vid, title, class, subject, link, filetype) VALUES ('".$vid."', '".$title."', '".$class."', '".$subject."', '".$target_file."', '".$imageFileType."');");

} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>