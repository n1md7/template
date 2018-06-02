<?php
	
	/*
		@DEBUG global variable for error reporting
	*/
	define('DEBUG', true);

	/*
		Database constants
		@DB_HOST - db hostname
		@DB_USER - db username
		@DB_PASS - db password
		@DB_NAME - db name
	*/
	define("DB_HOST", "localhost");
	define("DB_USER", "root");  
	define("DB_PASS", "password"); 
	define("DB_NAME", "dvwa");

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
