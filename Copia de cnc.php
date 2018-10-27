<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$hostname= 'localhost';
$database= 'parque-natural';
$username= 'tmp';
$password= 'tmp';

$link = mysqli_connect($hostname, $username, $password, $database) or die ("No se pudo conectar a la Base de Datos");
mysqli_set_charset ( $link , 'utf8' );

function executeQuery( $query){
  $link = $GLOBALS['link'];
  $result = mysqli_query($link, $query)  or die ("No se pudo realizar la consulta");
  return $result;
}

?>