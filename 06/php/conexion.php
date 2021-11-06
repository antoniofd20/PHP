<?php

// $host = 'us-cdbr-east-04.cleardb.com';
// $user = 'b12188bd25cb41';
// $pw = '319ae2ed';
// $db = 'heroku_64e57d4182f1353';

$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'paginacion';

$conexion = mysqli_connect($host, $user, $pw, $db);

if(!$conexion){
  echo 'No se pudo conectar con la base de datos ' . PHP_EOL;
  echo 'No. de error: ' . mysqli_connect_erno() . PHP_EOL;
  echo 'El error consiste en que: ' . mysqli_connect_erno() . PHP_EOL;
  die();

} else {
  $conexion->set_charset('utf8mb4');
  date_default_timezone_set('America/Mexico_City');
  setlocale(LC_ALL, 'es_MX');

  $fechahoy = date('Y-m-d');
}
?>