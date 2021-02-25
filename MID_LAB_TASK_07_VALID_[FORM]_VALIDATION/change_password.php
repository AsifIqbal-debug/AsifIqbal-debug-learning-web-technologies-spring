<?php
        $pass="";
        $error_pass="";
        $cpass="";
        $error_cpass="";

	if(isset($_POST['submit'])){

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

            
			if(empty($_POST["pass"])){
                $error_cpass="Enter pass again";
                
            }
            else if($_POST["cpass"]!=$pass){
                $error_cpass="Password mismatch";
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
			<legend>CHANGE PASSWORD</legend>
            Current Password  :  <input type="password" name="password" placeholder ="Password">  <br>
            New Password  :  <input type="password" name="password" placeholder ="Password"> <span><?php echo $err_pass;?></span> <br>
            Retype New Password  :  <input type="password" name="password" placeholder ="Password"> <span><?php echo $err_cpass;?></span> <br>
            <br>
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body> 
</html>