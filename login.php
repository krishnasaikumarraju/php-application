<?php
session_start();
$_SESSION['email']="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body id="bo">
<img src="0.jpg" width="101.45%" style="margin: -10px -20px -10px -10px; position: absolute;">
<div id="m1">
<form style="height: 100%" method="post">
	<p id="p1">Sign in</p> 
	<input type="text" id="t1" name="mail" placeholder="Email Address"><br>
	<span style="margin-left: 7%;font-size: 74%;color: red;margin-top: 0%;position: absolute;"> 
	<?php 
	$f=0;
	if ($_POST['sign']){
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
			 }}
			 ?>
			 </span><br>
	<input type="password" id="t1" name="pass" placeholder="Password"><br><br>
	<span style="margin-left: 7%;font-size: 74%;color: red;margin-top: -4%;position: absolute;"> 
	<?php 
	if ($_POST['sign']){
				if (!empty($_POST['pass'])) {
				$pass=$_POST['pass'];
				$f++;
			}else{
				echo "*Password is empty";
			}
			}
?>
			</span>
	<input type="submit" id="b1" name="sign" value="Login"></a><br><br>
<?php
	if ($f==2) {

	include 'dbconnect.php';
$sql=mysqli_query($conn,"SELECT email,password FROM login WHERE email='$mail' AND password='$pass'");
$rows=mysqli_num_rows($sql);
if($rows>0)
{
	$row = mysqli_fetch_assoc($sql);
	$_SESSION['email']= $row['email'];
    $password=$row['password'];   

if ($mail==$_SESSION['email']&&$pass==$password) {
    	header('location:welcome.php');
    }
else{
    	echo "<span style='margin-left: 7%;font-size: 74%;color: red;margin-top: -4%;position: absolute;'>*Invalid Email or Password</span>";
    } 
}
}
	?>
	<a href="#" id="p2">Forgot Password?</a><br><br>
	<a href="register.php" id="p3"><span id="s1">No account?</span>Create One!</a>
	</form>
</div>
</body>
</html>