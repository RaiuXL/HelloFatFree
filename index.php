<?php
// 328/hellofatfree/index.php
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require
require_once ('vendor/autoload.php');

//Create F3 Base class
$F3 = Base::instance();

//
$F3->route('GET /', function() {
    echo '<h1>Hello Fat Free!</h1>';
});
// Run Fatfree
$F3->run();