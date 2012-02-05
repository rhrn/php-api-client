<?php
	error_reporting(E_ALL | E_STRICT);

        include '../api.php';

	$api = new Api('http://devapirn.loc/v1/');

	$api->action('auth/signup');

	$params = array(
		'email' => 'email@email.com',
		'password' => 'password'
	);

	$api->params($params);

	$api->raw();

	$result = $api->post();

	$api->debug(1);

	print_r ($result);
