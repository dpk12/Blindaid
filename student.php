<?php
include 'dbconfig/config.php';
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet"  href="style.css">

</head>
<?php
  $nameerr="";
?>

<body style="background-color:#00FFFF">
<div id="main-wrapper">
<center><h2> Student Registration Form</h2></center>
<form class="myform" action="register.php" method="post" enctype="multipart/form-data">

</select>
<br><br>
<label><b>First Name</b></label>
<span class="error" style="color:#FF0000">*<?php echo $nameerr;?></span>
<input type="text" name="first name" class="inputvalues" placeholder="type your first name"><br><br>

<label><b>Last Name</b></label><br>
<input type="text" name="last name" class="inputvalues" placeholder="type your last name"><br><br>
<label><b>Email</b></label>
<span class="error" style="color:#FF0000">*<?php echo $nameerr;?></span>
<input type="text" name="email" class="inputvalues" placeholder="type your email"><br><br>
<label><b>School</b></label>
<span class="error" style="color:#FF0000">*<?php echo $nameerr;?></span>
<input type="text" name="School Name" class="inputvalues" placeholder="type your School Name"><br>


</select><br>
<label><b>username</b></label><br>
<input name="username" type="text" class="inputvalues" placeholder="Type your user name"><br><br>
<label><b>Password</b></label><br>
<input name="password" type="password" class="inputvalues" placeholder="Type your password"><br><br>
<label><b>Confirm Password</b></label><br>
<input name="Confirm password" type="password" class="inputvalues" placeholder="confirm your password"><br><br>
<label><b>gender</b></label>
<input type="radio" class="radio_btn" name="gender" value="male" checked>male
<input type="radio" class="radio_btn" name="gender" value="female">female<br><br>
<label><b>Date Of Birth<b></label>
<input type="date" value="DOB"> 
<br><br>
<label><b>Class<b></label>
<select class="Class" name="Class">
<option value="10th standard">10th standard</option>
<option value="11th standard">11th standard</option>
<option value="12th standard">12th standard</option>
<option value="Btech">Btech</option>
<option value="mtech">M.tech</option>
<input name="submit_btn" type="submit" id="signup_btn" value="sign up"/><br>
<a href="LR.php"><input type="button" id="back_btn" value="Back"/></a>

</form>
<?php
if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript">alert("signup button clicked")</script>';
	
	$FirstName=$_POST['First Name'];
        $LastName=$_POST['Last Name'];
        $Email=$_POST['Email'];
        $School=$_POST['School'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['Confirm password'];
        $gender=$_POST['gender'];
        $DOB=$_POST['Date Of Birth'];
        $Class=$_POST['Class'];
	
	if($password==$cpassword)
	{
		$encrypted_password=md5($password);
		$query="select * from userinfotable where username='$username'";
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript">alert("try another username")</script>';
		}
			
		else
		{
			move_uploaded_file($img_tmp,$target_file);
			$query=" insert into userinfotable values('','$FirstName','$LastName','$Email','$School','$username','$Password','$cpassword','$gender','$DOB','$class')";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
				echo '<script type="text/javascript">alert("user registerd ")</script>';
			}
			else{
				echo '<script type="text/javascript">alert("error ")</script>';
			}
			
		}
	}
	else{
		echo '<script type="text/javascript">alert("password and confirm password not match ")</script>';
		
	}
}
?>
</div>
</body>