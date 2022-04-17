<?php
	function ValidatePassword($password,$confrim_password){
		if(empty($password)){
            return 'password is required';
        }
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
    
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        return 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
        }

        if ($password !== $confrim_password) {
   			return 'Password and Confirm password does not match!';   
		}
	}