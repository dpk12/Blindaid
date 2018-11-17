<!Doctype HTML>
<html>
<body>
<form method="post" action="project1.php"> 
<p> Download file </p>
<input type="text" name="Link" value="C:\Users\Test\Documents\GitHub\team-17\uploads\sample.mp3">
<input type="submit" name="download" value="Download">
</form>
<?php
if(isset($_POST["Link"]))
$file =$_POST["Link"];
if(file_exists($file)) {
    header ("Content-type: octet/stream");
    header ("Content-disposition: attachment; filename=".$file.";");
    header("Content-Length: ".filesize($file));
    readfile($file);

    exit;
}
?>
</body>
</html>

