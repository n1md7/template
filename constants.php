<?php
	/*
		@DEBUG global variable for error reporting
	*/
	define('DEBUG', true);
	/*
		root path for webpage
	*/
	define("ROOT_PATH", "/".basename(dirname(__FILE__))."/");

	/*
		Root url for webpage
	*/
	define("ROOT_URL", $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].ROOT_PATH);

	define("MAIN_PAGE", ROOT_URL);

	define('ADMIN_GUI', true);
