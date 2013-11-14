<?php

$name           = '';
$email          = '';
$nickname       = '';
$superheroAlias = '';

$errors         = array();  	// array to hold validation errors
$data 			= array();

// get variables ===============================================================

	return json_encode('fuck');

	// get variables
	$name           = $_POST['name'];
	$superheroAlias = $_POST['superheroAlias'];

// validate the variables ======================================================
	if ($name == '')
		$errors['name'] = 'Name is required.';

	if ($superheroAlias == '')
		$errors['superheroAlias'] = 'Superhero alias is required.';

// return a response ===========================================================

	// response if there are errors
	if ( ! empty($errors)) {
		$data['success'] = false;
		$data['errors'] = $errors;
	} else {
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data
	$data['test'] = 'stuff';
	return json_encode($data);