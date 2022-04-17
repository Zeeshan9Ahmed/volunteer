<?php
	function ValidateField($fieled, $name){
		if(empty($fieled)){
			return "'".$name."' fieled is required";
		}
	}
?>