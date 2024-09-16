<?php
// $fullPath = realpath($_SERVER['PHP_SELF'] . '/../');
$fullPath = $_SERVER['PHP_SELF'];
$parentDir = dirname($fullPath);
$targetDir = basename($parentDir);
// define('BASE_PATH', realpath(__DIR__ . '/../'));
define('BASE_PATH', dirname(__DIR__));
define('CONFIG_PATH', BASE_PATH . '/Config/');
define('CONTROL_PATH', BASE_PATH . '/Controller/');
define('MODEL_PATH', BASE_PATH . '/Model/');
define('VALO_PATH', BASE_PATH . '/Valorizacion/');
define('LEGAL_PATH', BASE_PATH . '/Legal/');
define('VIEWS_PATH', BASE_PATH . '/views/');

echo BASE_PATH . "<br>";
echo CONFIG_PATH . "<br>";
echo CONTROL_PATH . "<br>";
echo MODEL_PATH . "<br>";
echo VALO_PATH . "<br>";
echo LEGAL_PATH . "<br>";
echo VIEWS_PATH . "<br>";

echo "<br>";
echo "<br>";




// Obtén el directorio padre de la ruta
// Devuelve "C:/xampp/htdocs/Docs/Dev-MAK"

// Obtén solo el nombre del directorio "Dev-MAK"
// Devuelve "Dev-MAK"

// echo $targetDir; // Imprime "Dev-MAK"

$parts = explode("/", $fullPath);
// print_r($parts);

// Usar array_slice para obtener los elementos a partir del índice 2
$subset = array_slice($parts, 3);
// Contar los elementos de la porción del array
$countPathLesss = count($subset);

echo $hum = __DIR__ . "<br>";
echo $humm = realpath($hum) . "<br>";
echo "<br>";

echo realpath(__DIR__) . "<br>";
echo dirname(__DIR__) . "<br>";
echo "<br>";

print_r(pathinfo(__DIR__));
echo "<br>";
echo "<br>";
echo "<br>";


echo "path " . $fullPath . "<br>";
echo $parentDir . "<br>";
echo $targetDir . "<br>";
print_r($parts);
echo "<br>";
print_r($subset);
echo "<br>";
echo $countPathLesss . "<br>";



echo "------------------------" . "<br>";
echo "<br>";
echo "<br>";



echo __DIR__ . "/Config/logout.php";
echo "<br>";
echo dirname(__FILE__);
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo getcwd();
echo "<br>";
echo strlen($_SERVER['PHP_SELF']);
echo "<br>";
