.<?php
require "db/data.php";


?>

<!DOCTYPE html>
<html>
<head>
<title>registration page</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body class="bac">

<div id="main-wrap">

<center>
<h2> REGISTRATION FORM</h2>
<img src="image/the.jpg" class="th"/>
</center>
<form  class="myform" action="reg.php" method="post" >
<label><b>Username:</b></label><br>
<input name="username" type="text" class="inputvalues" placeholder="enter user name" required/><br>

<label><b>Password:</b></label><br>
<input name="password" type="password" class="inputvalues" placeholder="enter password" required/><br>

<label><b>Confirm Password:</b></label><br>
<input name="cpassword" type="password" class="inputvalues" placeholder="enter password" required/><br>

<label><b>Email:</b></label><br>
<input name="email" type="email" class="inputvalues" placeholder="enter mail id" required/><br>

<input name="submit_btn" type="submit" id="sign_up" value="Sign up"/>
<a href="login.php"><input type="button" id="back_btn" value="Back"/></a>

</form>


<?php
if(isset($_POST['submit_btn']))
{
//echo '<script type="text/javascript"> alert("registered") </script>';	

	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$email = $_POST['email'];
	
	
	if($password==$cpassword)
	{
		$query = "select * from registration where username='$username'";
		
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run)>0)
			
			{
				
				echo '<script type="text/javascript"> alert("USER ALREADY EXSIST...TRY WITH ANOTHER USER NAME") </script>';	
			}
			else
			{
				$query="insert into registration value('$username','$password','$email')";
				$query_run= mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("USER REGISTERD AND GO TO LOGIN PAGE") </script>';	
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR!") </script>';	
				}
				
			}
	}
			else{
				
				echo '<script type="text/javascript"> alert("password and confirm password doesnot match") </script>';	
			}
				
			
	
}
?>





</div>
</body>
</html>