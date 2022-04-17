<?php
	session_start();
	require_once('Helpers/ValidateName.php');
	require_once('Helpers/ValidateEmail.php');
	require_once('Helpers/ValidateAnyFeiled.php');
	require_once('Helpers/ValidatePassword.php');
	require_once('Helpers/ValidatePhoneNumber.php');
	require_once('Helpers/ValidateImage.php');
	require_once('Helpers/Config.php');
	require_once('Helpers/CheckEmailExists.php');
	
	if(isset($_POST['submit'])){
		$data = $_POST;
		// print_r($_FILES);
		echo '<pre>';
		// print_r($data);
		SignUp($data,$db);

	}
	function SignUp($data,$con){
		$name = $data['name'];
		$email = $data['email'];

		$number = $data['number'];
		$address = $data['address'];
		$education = $data['education'];
		$date_of_birth = $data['date_of_birth'];
		$password = $data['password'];
		$confrim_password = $data['confrim_Password'];
		$image_name = '';

		$uploadImage = ValidateImageAndUpload($_FILES);

        

		$_SESSION['errors'] = [
			'nameErr' => ValidateName($name),
			'emailErr' => ValidateEmail($email),
			'numberErr' => ValidateField($number,'Phone Number '),
			'addreessErr' => ValidateField($address,'Address '),
			'educationErr' => ValidateField($education,'education '),
			'dateofbirthErr' => ValidateField($date_of_birth,'Date Of Birth '),
			'passwordErr' => ValidatePassword($password,$confrim_password),
			'imageErr' => ''
		];
		if(!is_array($uploadImage)){
            $_SESSION['errors']['imageErr'] = $uploadImage;
        }else{
            $image_name = $uploadImage['image'];
       }

       $data = [
				'name' => $name,
				'email' => $email,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'address' => $address,
				'phone_number' => $number,
				'education' => $education,
				'date_of_birth' => $date_of_birth,
				'Profile_picture' => $image_name,
				'is_active' => '0',
			];
			
		if(!empty($_SESSION['errors']['nameErr']) || !empty($_SESSION['errors']['emailErr']) 
			|| !empty($_SESSION['errors']['linkedINErr']) || !empty($_SESSION['errors']['locationErr']) 
			|| !empty($_SESSION['errors']['passwordErr']) || !empty($_SESSION['errors']['imageErr'])){
			print_r($_SESSION['errors']);
			if (isset($_SERVER["HTTP_REFERER"])) {
                // header("Location: " . $_SERVER["HTTP_REFERER"]);
            }	
		
		}
			$_SESSION['errors']['emailErr'] = CheckEmailExists($email,'volunteer',$con);

		if(!empty($_SESSION['errors']['emailErr'])){
			print_r($_SESSION['errors']);
			
			if (isset($_SERVER["HTTP_REFERER"])) {
                // header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
		}
		
		if(empty($_SESSION['errors']['emailErr'])){
			unset($_SESSION['errors']);			
			
			if($con->insert ('volunteer', $data)){
				echo 'record insert';	
			}
		}
		
	}	
?>