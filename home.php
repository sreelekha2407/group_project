<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ecf0f1">

<div id="main-wrap">

<center>
<h2> LOGIN FORM</h2>
<img src="image/th.jpg" class="th"/>
</center>


<form  class="myform" action="home.php" method="post" >
<label><b>Username:</b></label><br>
<input type="text" class="inputvalues" placeholder="enter user name"/><br>

<label><b>Password:</b></label><br>
<input type="password" class="inputvalues" placeholder="enter password"/><br>

<input type="submit" id="login_btn" value="login"/>

</form>
</div>
</body>
</html>