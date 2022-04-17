<?php

	function ValidateName($name){
		if(empty($name)){
			return 'Name Field is Required';
		}
		if(strlen($name) <3){
			return 'Name Must be Atlease 3 characters';
		}
		// if(!preg_match ("/^[a-zA-z]*$/", $name) ) {  
  //   		return "Only alphabets and whitespace are allowed.";  
		// }
	}