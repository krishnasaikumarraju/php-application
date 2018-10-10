<?php
$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	echo "success";
} 
$conn->close();
?>
<form>
<center>
<div>
	User name:<input type="text" name="uname" placeholder="username">
</div>
<div>	
	Email:<input type="text" name="email"  placeholder="@gmail.com">
</div>
<div>
	Mobile number:<input type="text" name="mblnumber" placeholder="mblnumber">
</div>
<div>
	Set password:<input type="password" name="spswd" placeholder="spswd">
</div>
<div>
	Re-type password:<input type="password" name="rpswd" placeholder="rpswd">
</div>
<div>  
	<input type="button" name="submit" value="submit">
</div>
	
</center>
</form>