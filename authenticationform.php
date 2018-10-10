

<center>
<form action="loginpage.php" method="POST" style="background-color: #33FFFF; width:50%">
	Email:<input type="text" name="email"   placeholder="email"><br> <span>
		<?php
		if ($_POST['signin']){
		if(empty($_POST ['email'])){
			echo "please enter the field";
		}else
		echo ""; 
		}?>
	</span><br>
	password:<input type="password" name="pswd"  placeholder="password"><br>
	<span>
		<?php
		if ($_POST['signin']){
		if(empty($_POST ['pswd'])){
			echo "please enter the field";
		}else
		echo ""; 
		}?>
	</span><br>
	<input type="submit" name="signin" value="signin"><br><br>
	<button><a href="authenticationregister.php">Register now</a></button>&nbsp &nbsp
	<button><a href="forgetlogin.php">Forget password</a></button>
</form>
</center>
<?php
if ($_POST['signin']){
		if(empty($_POST ['email'])){
include_once 'loginpage.php';
			}
		}
?>
