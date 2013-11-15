<?php

$errors         = array();  	// array to hold validation errors
$data 			= array();

// validate the variables ======================================================
	if (empty($_POST['name']))
		$errors['name'] = 'Name is required.';

	if (empty($_POST['superheroAlias']))
		$errors['superheroAlias'] = 'Superhero alias is required.';

// return a response ===========================================================

	// response if there are errors
	if ( ! empty($errors)) {
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data
	echo json_encode($data);