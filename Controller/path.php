<?php
// $fullPath = realpath($_SERVER['PHP_SELF'] . '/../');
$fullPath = $_SERVER['PHP_SELF'];

$parentDir = dirname(dirname($fullPath));
$targetDir = basename($parentDir);
// define('BASE_PATH', realpath(__DIR__ . '/../'));
define('BASE_PATH', $parentDir);
define('CONFIG_PATH', BASE_PATH . '/Config/');
define('CONTROL_PATH', BASE_PATH . '/Controller/');
define('MODEL_PATH', BASE_PATH . '/Model/');
define('VALO_PATH', BASE_PATH . '/Valorizacion/');
define('LEGAL_PATH', BASE_PATH . '/Legal/');
define('VIEWS_PATH', BASE_PATH . '/views/');

// echo BASE_PATH . "<br>";
// echo CONFIG_PATH . "<br>";
// echo CONTROL_PATH . "<br>";
// echo MODEL_PATH . "<br>";
// echo VALO_PATH . "<br>";
// echo LEGAL_PATH . "<br>";
// echo VIEWS_PATH . "<br>";