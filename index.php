<?php

// init session
session_start();

require('config.php');
require('constants.php');

error_reporting(E_ALL);
ini_set('display_errors', DEBUG ? 'On' : 'Off');


function autoloadModel($className) {
    $filename = "models/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadClasses($className) {
    $filename = "classes/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadController($className) {
    $filename = "controllers/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadCore($className) {
    $filename = "core/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register("autoloadClasses");
spl_autoload_register("autoloadCore");
spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");



$controller = (new Bootstrap($_GET))->createController();
if($controller)
	$controller->executeAction();
