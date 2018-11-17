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
<center><h2> Volunteer Registration Form</h2></center>
<form class="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">


<br><br>
<label><b>first name</b></label>
<span class="error" style="color:#FF0000">* <?php echo $nameerr;?></span>
<input type="text" name="firstname"  class="inputvalues" placeholder="type your first name">
<br><br>
<label><b>middle name</b></label><br>
<input type="text" name="middlename" class="inputvalues" placeholder="type your middle name"><br><br>
<label><b>last name</b></label>
<span class="error" style="color:#FF0000">* <?php echo $nameerr;?></span>
<input type="text" name="lastname" class="inputvalues" placeholder="type your last name"><br><br>
<label><b>Email</b></label>
<span class="error" style="color:#FF0000">* <?php echo $nameerr;?></span>
<input type="text" name="email" class="inputvalues" placeholder="enter your email">
<br><br>

<label><b>Password</b></label>
<span class="error" style="color:#FF0000">* <?php echo $nameerr;?></span>
<input name="password" type="password" class="inputvalues" placeholder="Type your password"><br><br>
<label><b> Confirm Password</b></label>
<span class="error" style="color:#FF0000">* <?php echo $nameerr;?></span>
<input name="cpassword" type="password" class="inputvalues" placeholder="confirm your password"><br><br>
<label><b>Subjects</b></label>
<select name="subjects">
<option value="mtech">Maths</option>
<option value="btech">Physics</option>
<option value="bsc">Chemistry</option>
<option value="mtech">Economics</option>
<option value="btech">Environmental Science</option>

</select>
<br><br>
<label><b>qualification</b></label>
<select name="qualification">
<option value="mtech">M.Tech</option>
<option value="btech">B.Tech</option>
<option value="bsc">B.Sc</option>
</select>
<br><br>
<label><b>Date of Birth</b></label>
<input type="date" name="date">
<input name="submit_btn" type="submit" id="signup_btn" value="sign up"/><br>
<a href="LR.php"><input type="button" id="back_btn" value="Back"/></a>


</form>
<?php
if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript">alert("signup button clicked")</script>';
	
	
	$firstname=$_POST['firstname'];
  
	
	
    
	
	
	$lastname=$_POST['lastname'];
	
	$middlename=$_POST['middlename'];

	$email=$_POST['email'];
	
	

	$password=$_POST["password"];
	
	
	$qualification=$_POST['qualification'];
	
	$subjects=$_POST["subjects"];
	$cpassword=$_POST["password"];
	
	
	
		
	if($password==$cpassword)
	{

		$query="select * from userinfotable where username='$firstname'";
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript">alert("try another username")</script>';
		}
		
			
		else
		{
			
			$query=" insert into userinfotable values('','$firstname','$lastname','$middlename','$email','$subjects','$qualification','$password')";
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
</html>