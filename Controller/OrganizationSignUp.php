<?php
	session_start();
	require_once('Helpers/ValidateName.php');
	require_once('Helpers/ValidateEmail.php');
	require_once('Helpers/ValidateAnyFeiled.php');
	require_once('Helpers/ValidatePassword.php');
	require_once('Helpers/Config.php');
	require_once('Helpers/CheckEmailExists.php');
	
	if(isset($_POST['submit'])){
		$data = $_POST;
		SignUp($data,$db);

	}
	function SignUp($data,$con){
		$name = $data['name'];
		$email = $data['email'];
		$linkedIn = $data['LinkedIn'];
		$location = $data['location'];
		$password = $data['password'];
		$confrim_password = $data['confrim_Password'];
		
		$_SESSION['errors'] = [
			'nameErr' => ValidateName($name),
			'emailErr' => ValidateEmail($email),
			'linkedInErr' => ValidateField($linkedIn,'LinkedIn'),
			'locationErr' => ValidateField($location,'Location'),
			'passwordErr' => ValidatePassword($password,$confrim_password)
		];
		
		if(!empty($_SESSION['errors']['nameErr']) || !empty($_SESSION['errors']['emailErr']) || !empty($_SESSION['errors']['linkedINErr']) || !empty($_SESSION['errors']['locationErr']) || !empty($_SESSION['errors']['passwordErr'])){
			
			if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }	
		
		}
			$_SESSION['errors']['emailErr'] = CheckEmailExists($email,'organization',$con);

		if(!empty($_SESSION['errors']['emailErr'])){
			
			if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
		}
		
		if(empty($_SESSION['errors']['emailErr'])){
			unset($_SESSION['errors']);			
			$data = [
				'name' => $name,
				'email' => $email,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'location' => $location,
				'linkedIn' => $linkedIn,
				'status' => 'pending',
			];
			if($con->insert ('organization', $data)){
				
			}
		}
		
	}	
?>