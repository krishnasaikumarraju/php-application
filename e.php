<!DOCTYPE html>
<html>
<head>
	<title> google page</title>
	<!-- <script type="text/javascript" src="googlepage.js"></script> -->
	<style>
		 a {
			text-decoration: none;
		}
		a:hover{
			text-decoration: underline;
		}
		footer div b:hover{
			text-decoration: underline;
		}
	</style>
</head>
<body style="background-color: white">


<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$pswconfirm=$_POST['pswconfirm'];
$dbay=$_POST['dbay'];
$gender=$_POST['gender'];
$mblnumber=$_POST['mblnumber'];
$currentmailadd=$_POST['currentmailadd'];
$loc=$_POST['loc'];


$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "student";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo ("connection failed".mysqli_connect_error());	
}else{
	echo "connected";
}
$sql ="INSERT INTO google_form(fname,lname,email,password,pswconfirm,dbay,gender,mblnumber,currentmailadd,loc) VALUES('$fname','$lname','$email','$password','$pswconfirm','$dbay','$gender','$mblnumber','$currentmailadd','$loc')";
if(mysqli_query($conn,$sql)){
	echo "new record created successfully";
}else{
	echo "error".$sql."<br>".mysql_error($conn);
}



?>

<div style="background-color: LightGray">
	<header>
		<img src="g1.png">

		<input type="submit" name="signin" value="signin" style="background-color: blue; float:right; margin: 2%">
	</header>
</div>
<center> 
<h1 style="font-size: 30px; color: #99A3A4"> Create your Google Account</h1>
</center>

<form action="" method="POST" style="float: right; background-color:#D0D3D4;padding: 1%;margin: 5%;" >

	
	<div>
		<b style="margin-right:25%" id="t1" >Name</b><br>
			<input type="text" name="fname"  placeholder="first" style="padding: 10px; width:30%">
			<input type="text" name="lname" placeholder="last" style="padding: 10px; width:30%">
		<br><br>
		<b style="margin-right: 16%" id="t2" register>Email:</b><br>
			<input type="text" name="email" placeholder="@gmail.com"; style="width: 27%;padding:10px"><br>
		<b style=" margin-right: 07%"><a href="#">i prefer to use my current email address</a></b><br><br>
		<b style="margin-right:19%" id="t3" register>Create a password</b><br>
			<input type="password"  name="password" placeholder="more than 8 characters" style="width: 27%;padding: 10px"><br><br>
		<b style="margin-right: 16%" id="t4" register>Confirm your password</b><br>
			<input type="text" name="pswconfirm" style="width: 27%;padding:10px"><br><br>
		<b style="margin-right: 23%" id="t5" register> Birthday </b><br>
			<input type="date" name="dbay"">
			<br><br>
		<b style="margin-right: 25%" id="t6" register>Gender</b><br>
			<select style="width:29%; padding:10px">
				<option value="male">male</option>
				<option value="female">female</option>
			</select><br><br>
		<b style="margin-right: 22%" id="t7" register>Mobile phone</b><br>
			<input type="text" name="mblnumber" style="padding:10px; width:28%"><br><br>
		<b style="margin-right: 15%" id="t8" register>Your current email address</b><br>
			<input type="text" name="currentmailadd" style="width:28%;padding: 10px"><br><br>
		<b style="margin-right: 25%" id="t9" register>Location</b><br>
			<input type="text" name="loc" placeholder="india(jaihind)" style="width: 28%;padding: 10px"><br><br>
			<input type="submit" name="submit" value="next step" style="background-color: blue;color: white; width:30%; padding: 10px" onclick="validate()"></b>
	</div>
</center>
</form>
<div style="margin-top: 20%;margin-left: 5%">
	<div>
		<center>
		<p style="color: #3498DB  ">Only one account is needed Take it all with you</p>
		<img src="instagram-logo.png">
		<img src="google-play.png">
		<img src="drive.png">
		<img src="android-logo.png">
		<img src="google.png">
		</center>
	</div>
		<img src="g3.png">
</div>

<p style="float: right; clear: both ;margin-right:15%; margin-top: -4%" ><a href="#">learn more</a> about why we ask this information.</p>

<footer style="clear: both;background-color: #797D7F;padding: 1%">
<div>
	<b style="font-size: 15px">Privacy & Terms</b>&nbsp&nbsp
	<b style="font-size: 15px">Help</b>

	<select style="float: right;">
		<option value="india" >
			india(jai hind)
		</option>
	</select> 

	<img src="msg.png" style="float: right;">
</div>
</footer>

</body>
</html>