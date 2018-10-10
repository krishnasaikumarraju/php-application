<?php
if($_POST)
{
$servername="localhost";
$username="root";
$password="ameex";
$dbname="student";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 
 if (!$conn)
 {
 	echo "error";
}
 else{
 	echo "connected";
 }

	
$name=$_POST['email'];
$password=$_POST['pswd'];
if(!empty($name)){
$check="SELECT email,rpswd FROM authentication_form WHERE email='$name' AND spswd='$password' ";
$a=mysqli_query($conn,$check);
if (mysqli_num_rows($a) > 0) {
  
   {
        echo " matched successfully !!";
        header('location:bankinghome.php');
    }
} else {
    echo "Unmatched";
    header('location:authenticationregister.php');
}} 
else{
	echo " fields to be filled !!";
}


}

 ?>
