<?php

	function ValidateEmail($email){
		if (empty($email)) {
           return "Email is required";
          } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              return  "Invalid email format";
            }
        }
	}