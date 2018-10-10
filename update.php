<?php
if ($_POST) {

$servername="localhost";
$username="root";
$password="ameex";
$dbname="student";
$email=$_POST['email'];
$spswd=$_POST['spswd'];
$rpswd=$_POST['rpswd'];

if($spswd!=$rpswd){
	echo "password unmatched";
	header('location:forgetlogin.php');
}
else{

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    echo "Connection failed";
} else {
	echo "Success";
	}
$sql="UPDATE authentication_form  SET spswd='$spswd' WHERE email='$email'" ;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
	echo "not changed";
}
}
}

?>

<button><a href="authenticationform.php">go back login page</a></button>