<?php

	require_once('cliente.class.php');
	require_once('lib/nusoap.php');

	$server =  new nusoap_server;
	$server->configureWSDL('cliente','urn:cliente');

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);


?>