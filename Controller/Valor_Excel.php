<?php


// header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
// header("Content-Disposition: attachment; filename=reporte_test.xls");

// print_r($_POST);

// $fecha_ini_val = $_POST['fecha_ini_val'];
// $fecha_fin_val = $_POST['fecha_fin_val'];

// if (isset($fecha_ini_val)) {
//     $sql = "call excel_report";
// } else {
//     $sql = "call excel_report_($fecha_ini_val, $fecha_fin_val)";
// }



// $cnx = new Conexion();
// $cadena = $cnx->abrirConexion();

// mysqli_set_charset($cadena, "utf8");

// $resultado = mysqli_query($cadena, $sql);

// // Obtener los nombres de las columnas
// $nombres_columnas = mysqli_fetch_fields($resultado);

// // Crear el encabezado del archivo Excel
// foreach ($nombres_columnas as $columna) {
//     echo utf8_decode($columna->name) . "\t";
// }
// echo "\n";

// // Iterar sobre los resultados y escribir en el archivo Excel
// while ($fila = mysqli_fetch_assoc($resultado)) {
//     foreach ($fila as $valor) {
//         echo utf8_decode($valor) . "\t";
//     }
//     echo "\n";
// }


//-----------------------------------------------
//--
//-----------------------------------------------


require_once('../Config/Conexion.php');
require_once('../Config/security.php');
require_once('../Controller/controladorListar.php');
require_once '../google-api-php-client/vendor/autoload.php'; // Ajusta la ruta según tu estructura

// Configuración del cliente (como se mostró en el código anterior)

$credentialsPath = '../google-api-php-client/sheets-405314-cfa0f17a1fc2.json';

// if (!file_exists($credentialsPath)) {
//     die("El archivo de credenciales no existe en la ruta especificada.");
// }
// Configuración del cliente
$client = new Google_Client();
$client->setApplicationName('Nombre de tu Aplicación');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig($credentialsPath);
$client->setAccessType('offline');

$service = new Google_Service_Sheets($client);

$sql = "SELECT id_valor FROM valorizacion limit 1";
// $sql = "call excel_report";

$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

mysqli_set_charset($cadena, "utf8");

// Obtener los resultados de la base de datos
$resultado = mysqli_query($cadena, $sql);

// Crear un array para almacenar los datos
$data = array();


// Obtener los nombres de las columnas
$nombres_columnas = mysqli_fetch_fields($resultado);

// Añadir nombres de columnas al array de datos
$column_names = array();
foreach ($nombres_columnas as $columna) {
    $column_names[] = $columna->name;
}
$data[] = $column_names;

// Iterar sobre los resultados y agregar filas al array de datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    $data[] = array_values($fila);
}

// Rango donde se insertarán los datos (A1:Z, por ejemplo)
$range = 'Sheet1!A1:' . chr(65 + count($column_names) - 1) . (count($data) + 1);



// Crear el cuerpo de la solicitud
$body = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

// ID de la hoja de cálculo donde se insertarán los datos
$spreadsheetId = createSpreadsheet($service, 'Nombre de tu Hoja de Cálculo'); // Llama a la función para crear la hoja de cálculo
echo "Spreadsheet ID: $spreadsheetId\n";

// Realizar la solicitud para insertar los datos

// try {
// Realizar la solicitud para insertar los datos
$result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, [
    'valueInputOption' => 'RAW'
]);

// Imprimir la respuesta
printf("%d celdas actualizadas.", $result->getUpdatedCells());
// } catch (Google\Service\Exception $e) {
// Manejar el error
//     echo 'Error de la API: ' . $e->getMessage() . PHP_EOL;
//     echo 'Código de error: ' . $e->getCode() . PHP_EOL;
//     echo 'Detalles del error: ' . json_encode($e->getErrors(), JSON_PRETTY_PRINT) . PHP_EOL;
// }



// Función para crear una hoja de cálculo y devuelve su ID
function createSpreadsheet($service, $spreadsheetTitle)
{
    $spreadsheet = new Google_Service_Sheets_Spreadsheet([
        'properties' => [
            'title' => $spreadsheetTitle
        ]
    ]);

    $spreadsheet = $service->spreadsheets->create($spreadsheet, [
        'fields' => 'spreadsheetId'
    ]);

    return $spreadsheet->spreadsheetId;
}


// https://docs.google.com/spreadsheets/d/{ 1cZWImj_Gtd4o2jmkhq0woUo4urv8xxOOucYq5b4RtGs}


// Cerrar la conexión a la base de datos
$cnx->cerrarConexion($cadena);
