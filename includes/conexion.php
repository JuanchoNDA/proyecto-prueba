<?php
/* Este archivo se encarga de la conexion con nuestra base de datos */

/* Parametros que utilizamos: */
$host = "localhost";
$user = "daiki";
$password = "#0J1u2a3n";
$database = "Coloreal";
$port = "3306";
$charset = "utf8mb4";
/* Aqui se define la cadena de conexión DSN (Data Source Name) para PDO*/
$PDO = "mysql:host=$host;port=$port;dbname=$database;charset=$charset";
/* Estas son opciones de seguridad, el manejo de errores y la forma en que se obtienen los datos*/
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
/* Conexion con control de errores */
try{
    /* Se intenta establecer una conexión a la base de datos */
    $conexion = new PDO($PDO, $user, $password, $options);
}
catch(PDOException $e){
    /* Si ocurre un error se captura la excepcion y se muestra un mensaje con el codigo */
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
}
?>