<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>blob file</title>
</head>
<body>
<?php


$con=mysqli_connect("localhost","root","system","mydata");
//$dbh = new PDO("mysql:host=localhost;dbname=mydata","root","system");
		$result=mysqli_query($con,"select *from myfile") or die(mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{	
			echo "".$row[1]."  <a href='".$row[1]."'>download</a></br>";
		}
		

	
?>
</body>
</html>
