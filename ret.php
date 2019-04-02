<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","system","upload");
if(!$con){
	echo "error";
}
else{
	
	
	$query=mysqli_query($con,"SELECT * FROM  file");
	
	$noofrows=mysqli_num_rows($query);
	$records=mysqli_fetch_array($query);
	echo "$records['ppt']";
if($query==null){
	echo "noo";
}
	else{
		echo "ok";
	}
	
	
//$array_restire_from_upload=unserialize(base64_decode($encoded_serialized_string));
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>