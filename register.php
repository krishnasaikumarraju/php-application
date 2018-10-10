<!DOCTYPE html>
<html>
<head>
	<title>Create your Account</title>
	
</head>
<body>
<div >
<form   method="post">
	<p >Create your Account</p> 
	<input type="text" name="mail" placeholder="Email Address"><br>
	<span> 
	<?php 
	$f=0;
	if ($_POST['create']){
			if (!preg_match("/^[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$/", $_POST['mail'])){
				if (empty($_POST['mail']))
				{
					echo "*E-mail is empty";
				}
				else
				{
					echo "*E-mail not valid";
				}
			}
				else{
			$mail=$_POST['mail'];
			$f++;
			 }
	}
?>	
</span><br>
	<input type="password"  name="pass" placeholder="Create your own Password"><br><br>
	<span > 
	<?php 
	if ($_POST['create']){
			
			if (preg_match("/^(.{0,7}|[^0-9]*|[^A-Z]*|[^a-z]*|[a-zA-Z0-9]*)$/", $_POST['pass'])){
				if (empty($_POST['pass'])) 
				{
					echo "*Password should not be empty";
				} 
				else{

				echo "*Give a valid Password ";
						}
					}
					else{
						$pass=$_POST['pass'];
						$f++;
					}				
				
			}
					?>
					</span>
	<input type="submit"  name="create" value="Create"><br><br>
	<?php
	if ($f==2) {

	include 'dbconnect.php';
$sql= "INSERT INTO authentication_form (email, password) VALUES ('$mail', '$pass')";
if (mysqli_query($conn, $sql)) {
    	    echo "<span style='margin-left: 7%;font-size: 74%;color: red;margin-top: -4%;position: absolute;'>Account Created Successfully </span>";
}
 else {
    echo "<script type='text/javascript'>alert('Account already exists')</script>";
}}
    ?>
    <a  href="login.php">Login Now</a>
</form>
</div>
</body>
</html>