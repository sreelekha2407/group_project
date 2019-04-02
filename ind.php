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
if(isset($_POST['btn'])){
	$filepath="files/";
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$path=$filepath.$name;
	$data=file_get_contents($_FILES['myfile']['tmp_name']);
	if(move_uploaded_file($_FILES['myfile']['tmp_name'],$filepath.$name))
	{
		/*$stmt=$dbh->prepare("insert into myblob(name,mine,data) values(?,?,?)");
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$type);
		$stmt->bindParam(3,$path);
		$stmt->execute($dbh,'$stmt')or die(mysqli_error($dbh));
		*/
		mysqli_query($con,"insert into myfile(fname,path) values('".$name."','".$path."')") or die(mysqli_error($con));
		echo "File Uploaded successfully";
	}
	else
	{
		echo "File Not Uploaded";
	}
		
}
	
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="myfile"/>
<button name="btn">upload</button>
</form>
</body>
</html>
