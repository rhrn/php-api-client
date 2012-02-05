<?php
	
	error_reporting(E_ALL | E_STRICT);

	include '../api.php';

	$params = array();

	$params['scope']		= 'http://www-opensocial.googleusercontent.com/api/people';

	$params['client_id']		= '850925423357.apps.googleusercontent.com';
	$params['redirect_uri']		= 'http://rhrn.ru/oauth2/google';
	$params['response_type']	= 'token';

	//$params['client_id']		= '850925423357-3jq8nc6atl3l1cujrjludm2flftmelc8.apps.googleusercontent.com';
	//$params['redirect_uri']	= 'urn:ietf:wg:oauth:2.0:oob';
	//$params['redirect_uri']	= 'http://localhost';
	//$params['response_type']	= 'code';


	$api = new Api('https://accounts.google.com/o/oauth2/auth');
	$api->params($params);
	$api->raw();

	$url = $api->getUrl();
	print_r ($url) . "\n";

	//$result = $api->get();
	//print_r ($result);

	//$api->debug(1);

/*

	$api = new Api('https://www.googleapis.com/plus/v1/');
	$result = $api->action('people/102371470459242431624')
			->get();
	$api->debug();

	//print_r ($result);

*/
