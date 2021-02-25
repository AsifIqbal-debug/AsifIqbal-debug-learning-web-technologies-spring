<?php

	session_start();

	if(isset($_POST['submit'])){

		$user = $_SESSION['current_user'];
		$email2 = $_POST['email2'];
		
		$new_pass = $_POST['new_pass_word'];

		if($user['email']==$email2)
		{

			if ($new_pass_word ="" ) 
			{
				echo "Enter a new Password";
			}

				else if ($password1=="@" ||$password1=="#" || $password1=="$" ||$password1=="%" and strlen($password1)<8) 
				{
					$user['password']=$new_pass_word;
					echo "Password changed";
				}
				else
				{
					echo "Enter a Valid password ";
 				}
		};
		}else{
				echo "Invalid Input";
			}
	}
?>