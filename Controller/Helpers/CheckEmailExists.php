<?php
	// require_once('Config.php');
	function CheckEmailExists($email,$table,$db){
		$user = $db->where('email',$email)->getOne($table);
		if($user){
			return 'Email Already Exists';
		}
	}