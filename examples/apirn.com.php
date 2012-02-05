<?php

	$api = new Api('http://apirn.com/v1/');

	$api->action('auth/signup');

	$params = array(
		'email' => 'email@email.com',
		'password' => 'password'
	);

	$api->params($params);

	$result = $api->post();

	$api->debug(1);

	print_r ($result);
