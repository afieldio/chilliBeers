<?php

define('CONTROLLERS', 'application/controllers/');
define('DATA', 'application/data/');
define('VIEWS', 'application/views/');
define('CONFIG', 'config/');

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include(CONFIG . 'db.php');
include(CONFIG . 'functions.php');