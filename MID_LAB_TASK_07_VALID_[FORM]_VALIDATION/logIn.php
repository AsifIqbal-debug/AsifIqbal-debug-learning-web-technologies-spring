<?php

$uname="";
$error_uname="";
$pass="";
$error_pass="";

	if(isset($_POST['submit'])){

		if(empty($_POST["uname"])){
            $error_uname="User name required";
        }
        else if(strlen($_POST["uname"]) < 6){
            $error_uname="Username must be more than 6 characters long";
        }
        else if(strpos($_POST["uname"]," ")){
            $error_uname="Username should not contain whitespace";
        }

        else{   
            $uname=$_POST["uname"];

        }

        if(empty($_POST["pass"]))
		 {
			 $error_pass="[Password Required]";
		 }
		 elseif(htmlspecialchars($_POST["pass"]))
		 {
			 $error_pass=["HTML KeyWords Used"];
		 }
		 elseif (strlen($_POST["uname"])<8) {
		 	$error_pass=["[Password must be 8 characters long"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $error_pass="[Password should contain special character]";
		 }
		 elseif(!is_numeric($_POST["pass"]))
		 {
			 $error_pass="[Password should contain Numeric values]";
		 }
		 elseif(!ctype_upper($_POST["pass"]))
		 {
			 $error_pass="[Password should contain UpperCase values]";
		 }
		 elseif(!ctype_lower($_POST["pass"]))
		 {
			 $error_pass="[Password should contain LowerCase values]";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $error_pass="[Password should not contain white space]";
		 }
		 else
		 {
			 $error_pass=$_POST["pass"];
         }


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>LOGIN</legend>
			User Name : <input type="text" name="uname" placeholder ="Username"> <span><?php echo $err_uname;?></span><br>
            Password  :  <input type="password" name="password" placeholder ="Password"> <span><?php echo $err_pass;?></span> <br>
            <br>
            <input type="checkbox" name="degree"> Remember Me <br>
            <input type="submit" name="submit" value="Submit">
            <a href="page2.html">Forget Password?</a>
		</fieldset>
	</form>
</body> 
</html>