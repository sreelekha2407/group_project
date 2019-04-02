<?php
session_start();
require "db/data.php";

//$redirect = true;
//header('Location:frame.php');


?>

<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="bac">

<div id="main-wrap">

<center>
<h2> LOGIN FORM</h2>
<img src="image/th.jpg" class="th"/>
</center>


<form  class="myform" action="login.php" method="post" target="_parent">
<label><b>Username:</b></label><br>
<input name="username" type="text" class="inputvalues" placeholder="enter user name" required/><br>

<label><b>Password:</b></label><br>
<input name="password" type="password" class="inputvalues" placeholder="enter password" required/><br>

<input name="login" type="submit" id="login_btn" value="login"/>

</form>
<?php
		if(isset($_POST['login']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			
			$query = "select * from registration where username='$username' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username']=$username;
				header('location:frame.php');
			}	
			else
			{
				echo '<script type="text/javascript"> alert("INVALID USERNAME OR PASSWORD") </script>';		
			}			
		}
	?>
</div>
</body>
</html>