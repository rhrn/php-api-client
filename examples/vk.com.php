<?php
	error_reporting(E_ALL | E_STRICT);

	include '../api.php';

/*
	$config = array();

	$config['client_id']		= '2760348';
	$config['scope']		= 'notify,friends,photos,audio,messages,offline';
	$config['display']		= 'popup';
	$config['response_type']	= 'token';
	$config['redirect_uri']		= 'http://api.vk.com/blank.html';

	$auth = new Api('http://oauth.vk.com/authorize/', $config);

	$result = $auth->getURL(); # url access permitions

	echo ($result) . "\n";
*/


	$vk = new Api('https://api.vk.com/method/');

	$params['uid']		= '2194115';
	$params['access_token'] = '36bbb262369ac8a1369ac8a1ca36b0d63d3369b369bd8af6810fde9c62281ee';

	$result = $vk->action('messages.get')
			->params($params)
			->get();

	$vk->debug(1);

	print_r ($result);
