<?php
echo "<center>" ;
echo " Get registered" ;
echo "</center>" ;
if($_POST)
{

	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$mblnumber=$_POST['mblnumber'];
	$spswd=$_POST['spswd'];
	$rpswd=$_POST['rpswd'];
	

$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "student";


$conn =mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo("Connection failed: " );
} else {
	echo "Successfully";
}

$sql = "INSERT INTO authentication_form (uname,email,mblnumber,spswd,rpswd) VALUES('$uname','$email','$mblnumber','$spswd','$rpswd')";
if(mysqli_query($conn,$sql)){
	echo "RECORD CREATED";
}else{
	echo "error";
}
}

?>

<center >
<form method="POST" style="background-color: #33FF36;width:60%;margin-top: 50px; border: 2px; padding: 5px">
<div>
	User name:<input type="text" name="uname" placeholder="username"><br><br>
</div>
<div>	
	Email:<input type="text" name="email" placeholder="@gmail.com"><br><br>
</div>
<div>
	Mobile number:<input type="text" name="mblnumber"  placeholder="mblnumber"><br><br>
</div>
<div>
	Set password:<input type="password" name="spswd"  placeholder="spswd"><br><br>
</div>
<div>
	Re-type password:<input type="password" name="rpswd"  placeholder="rpswd"><br><br>
</div>

<div>
	give your security question ? :<textarea ></textarea><br><br>
</div>
<div>  
	<input type="submit" name="submit" value="submit">
</div>
</form>	
</center>
