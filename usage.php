<?php
	
	error_reporting(E_ALL | E_STRICT);

	include 'api.php';

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
