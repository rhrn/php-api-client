<?php
	
	error_reporting(E_ALL | E_STRICT);

	include '../api.php';

        $api = new Api('https://api.twitter.com/1/');

        $params = array(
                'include_entities' => 'true',
                'screen_name' => 'rhrn'
        );

        $result = $api->action('users/lookup.json')
                ->params($params)
                ->get();

	$api->debug(1);

        print_r ($result);
