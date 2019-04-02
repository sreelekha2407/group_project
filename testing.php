<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","system","upload");
if(!$con){
	echo "error";
}
else{
$name=$_FILES["ppt"]["name"];
$type=$_FILES['ppt']['type'];
/*
$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);
echo "$fileextension";*/

$data=file_get_contents($_FILES["ppt"]["tmp_name"]);
echo "$name\n$data";

$query=mysqli_query($con,"insert into file(name,ppt) values('$name','$data')");
if($data===null){
	echo "error inserting!!!";
}
else{
	echo "done successssss";
	
}



}
?>