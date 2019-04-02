<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style1.css">
	</head>
	<form class="myform" action="front.php" method="post" target="_parent">
	<img src="image/the.jpg" class="the" align="left"/>
	<font size="15"> EDIFYING YOU </font>

	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	 
	
	<a href="aboutus.html" target="right">ABOUT US</a>
	&nbsp &nbsp &nbsp &nbsp  
	
	
	<a href="front.php" align="right"/><input name="signout" type="submit" value="sign out"/></a>
</form>





<?php

	if(isset($_post['signout']))
	{
		session_destroy();
		header('location:front.php');
	}
?>
<body class="colo">
</body>
</html>
