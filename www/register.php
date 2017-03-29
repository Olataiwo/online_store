<?php


$page_title = "Register";


include 'includes/header.php';

if(array_key_exists('register',$_POST)){

	#cache errors

	$error = [];

	#validate first name

	if(empty($_POST['fname'])){
		$errors[] = "please enter a firstname";
	}

	if (empty($_POST['lname'])){

		$errors[] = "please enter a last name";
	}

	if (empty($_POST['email'])){


		$errors[] = "enter your email";
	}

	if (empty($_POST['password'])){

		$errors[] = "password cannot be left empty";


	}

	if (empty($_POST['pword'])){

		$errors[] = "confirm your password";
	}

	if (empty($errors)){

		
		//do data base stuff

	}else {

		foreach($errors as $error){

			echo $error;
		}
	}
}


?>



<div class="wrapper">

		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				<label>last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">login</a></h4>
	</div>


	<?php

	include 'includes/footer.php';


	?>