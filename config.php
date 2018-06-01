<?php

	define('DEBUG', true);

	define("DB_HOST", "localhost");
	define("DB_USER", "root");  
	define("DB_PASS", "password"); 
	define("DB_NAME", "dvwa");

	define("ROOT_PATH", "/".basename(dirname(__FILE__))."/");

	define("ROOT_URL", $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].ROOT_PATH);

	define("MAIN_PAGE", ROOT_URL);
