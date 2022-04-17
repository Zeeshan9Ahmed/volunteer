<?php

	function ValidatePhoneNumber($number){
		if(	empty($number) ){
			return 'Phone Number Field is Required';
		}
		if (!preg_match ("/^[0-9]*$/", $number) ){  
    		return "Only numeric value is allowed.";  
		}
		
		if ( strlen($number) < 10 && strlen($number) > 10) {  
    		return "Mobile must have 10 digits.";  
		}  
	}