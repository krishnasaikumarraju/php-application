<?php
$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "student";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo "connection failed";	
}else{
	echo "success";
}
?>