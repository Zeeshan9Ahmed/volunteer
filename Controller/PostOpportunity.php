<?php
session_start();
require_once('Helpers/ValidateName.php');
require_once('Helpers/ValidateAnyFeiled.php');
require_once('Helpers/Config.php');
echo '<pre>';
if(isset($_POST['submit'])){
    $data = $_POST;
    PostOpportunity($data,$db);
}



function PostOpportunity($data ,$con){
    $data = [
        'name' => $data['name'],
        'organization_id' => 1,
        'category_id' => $data['category_id'],
        'type_id' => $data['type_id'],
        'start_date' => $data['start_date'],
        'end_date' => $data['end_date'],
        'description' => $data['description'],
        'location' => $data['location'],
        'no_of_volunteers' => $data['no_of_volunteers'],
        'is_approved' => 0,
    ];
    $_SESSION['errors'] = [
        'nameErr' => ValidateName($data['name']),
        'categoryErr' => ValidateField($data['organization_id'],'Category '),
        'typeErr' => ValidateField($data['type_id'],'Type '),
        'locationErr' => ValidateField($data['location'],'Location'),
        'startErr' => ValidateField($data['start_date'],'Date '),
        'endErr' => ValidateField($data['end_date'],'Date '),
        'descErr' => ValidateField($data['description'],'Description '),
        'volnErr' => ValidateField($data['no_of_volunteers'],'Volunteer '),
    ];
    if(!empty($_SESSION['errors']['nameErr']) || !empty($_SESSION['errors']['categoryErr']) || !empty($_SESSION['errors']['typeErr']) 
        || !empty($_SESSION['errors']['locationErr']) || !empty($_SESSION['errors']['startErr']) || !empty($_SESSION['errors']['endErr'])
        || !empty($_SESSION['errors']['descErr']) || !empty($_SESSION['errors']['volnErr']) ){
			
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }	
    
    }

    if($con->insert ('volunteering_opportunity', $data)){
		unset($_SESSION['errors']);
        echo 'record inserted successfully';
    }
}