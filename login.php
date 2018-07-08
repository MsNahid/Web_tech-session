<?php
session_start(); //start the PHP_session function 


if(isset($_POST['un']) && isset($_POST['pw']))
{

	#$un="saef";
	#$pw="pass";
	$un=$_POST['un'];
	$pw=$_POST['pw'];
	$user = array("nahid"=>"123", "elon"=>"456", "bill"=>"dollar");
	$flag=false;

	foreach($user as $x=> $x_value){
		
		if($user[$x] == $pw){
			$_SESSION['un']=$un;
			$flag=true;
			header("location:home.php");
		}
	}
	if(!$flag){
		
		echo "Username/password does not match!"."<br>";
		
	}
	/*if($_POST['un']==$un && $_POST['pw']==$pw){
		$_SESSION['un']=$un;
		header("location:home.php"); 
		
	}
	else{
		echo "wrong username or password";
	}
	*/
}
?>



	<form name="login" method="post">
		User Name:<input type="text" name="un" /><br/>
		Password:<input type="password" name="pw"/><br/>
		<input type="submit" name="submit" />
	</form>
