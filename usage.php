<?php
	
	error_reporting(E_ALL | E_STRICT);

	include 'api.php';

/*
	$api = new Api('http://devapirn.loc/v1/');

	$api->action('auth/signup');

	$params = array(
		'email' => 'email@email.com',
		'password' => 'password'
	);

	$api->params($params);

	$result = $api->post();
	$api->debug(1);

	print_r ($result);
*/


/*

	$api = new Api('http://localhost/');

	$data = array(
		'name' => 'Foo',
		'images[0]' => '@/home/rhrn/www/api/image.jpg',
		'images[1]' => '@/home/rhrn/www/api/image2.jpg',
		'files[1]' => '@/home/rhrn/www/api/usage.php'
	);

	$result = $api->action('upload.php')
		->params($data)
		->raw()
		->upload();

	print_r ($result);

	$api->debug(1);
*/


/*
	$params = array();

	$params['scope']		= 'http://www-opensocial.googleusercontent.com/api/people';

	//$params['client_id']		= '850925423357.apps.googleusercontent.com';
	//$params['redirect_uri']		= 'http://rhrn.ru/oauth2/google';
	//$params['response_type']	= 'token';

	$params['client_id']		= '850925423357-3jq8nc6atl3l1cujrjludm2flftmelc8.apps.googleusercontent.com';
	//$params['redirect_uri']	= 'urn:ietf:wg:oauth:2.0:oob';
	$params['redirect_uri']		= 'http://localhost';
	$params['response_type']	= 'code';


	$api = new Api('https://accounts.google.com/o/oauth2/auth');
	$api->params($params);
	$api->raw();

	$url = $api->getUrl();
	print_r ($url);

	//$result = $api->get();
	//print_r ($result);

	//$api->debug(1);
*/

/*

	$config['client_id']		= '2760348';
	$config['scope']		= 'notify,friends,photos,audio,messages,offline';
	$config['display']		= 'popup';
	$config['response_type']	= 'token';
	$config['redirect_uri']		= 'http://api.vkontakte.ru/blank.html';

	$vk_OAuth = 'http://oauth.vkontakte.ru/authorize/';

	//$vk_OAuth			= 'http://oauth.vk.com/authorize/';
	//$config['redirect_uri']	= 'http://api.vk.com/blank.html';


	$auth = new Api($vk_OAuth, $config);

	$result = $auth
			->raw()
			//->curl(false)
			->get();

	$auth->debug();

	var_dump ($result);

*/

/*
	$vk = new Api('https://api.vkontakte.ru/method/');

	$params['uid']		= '2194115';
	$params['access_token'] = 'ccd4a227ccf5d8e4ccf5d8e4caccdfc678cccf4ccf4c8eabdcc66f14830ce7c';

	$result = $vk->action('messages.get')
			->params($params)
			->get();

	$vk->debug();

	print_r ($result);
*/

/*
		
	$api = new Api('https://api.twitter.com/1/');

	$params = array(
		'include_entities' => 'true',
		'screen_name' => 'rhrn'
	);

	$result = $api->action('users/lookup.json')
		->params($params)
		->get();

		$api->debug();

	print_r ($result);
*/

/*

	$api = new Api('https://www.googleapis.com/plus/v1/');
	$result = $api->action('people/102371470459242431624')
			->get();
	$api->debug();

	//print_r ($result);

*/

/*
	$api = new Api('http://www.google.com/');
	$r = $api->raw()->get();
	print_r ($r);
*/
