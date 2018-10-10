<!DOCTYPE html>
<html>
<head>
	<title>validation</title>
</head>
<body>
<?php
$name= $email= $password= $dob= "" ;
if($_SERVER["REQUEST_METHOD"]==POST){
	$name=($_POST["name"]);
	$email=($_POST["email"]);
	$passwors=($_post["password"]);
	$dob=($_POST["dob"]);
	if(!empty($name) && (!empty($email))){
		echo "the name is =". $name; echo "<br>";
		echo "email id is =". $email; echo "<br>";
		echo "my date of birth is = ".$dob; echo "<br>";


	}else{
		echo "fill the form";
	}
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
NAME: <input type="text" name="name"  placeholder="eg:alphabits only"><br>
EMAIL: <input type="text" name="email" placeholder="eg:@gmail.com"><br>
PASSWORD: <input type="password" name="password" placeholder="any special character" ><br>
DATE OF BIRTH: <input type="date" name="dob"><br>
<input type="submit" name="submit" value="submit">
	
</form>

</body>
</html>
