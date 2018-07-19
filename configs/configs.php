<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
error_reporting(E_ALL || E_NOTICE || E_STRICT);
if (version_compare(phpversion(), '5.1.0', '<')) {
    die('PHP 5.1.0 Only');
}

define('DS', '/');
define('EXT', '.php');

define('URL_BASE', 'http://localhost/banLaptop/Team_1_Laptop/public/');
define('DEFAULT_TEMPLATE', 'default');
define('DEFAULT_MODULE', 'Default');
define('DEFAULT_CONTROLLER', 'Index');
define('DEFAULT_ACTION', 'index');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATA', 'shopproject');
?>