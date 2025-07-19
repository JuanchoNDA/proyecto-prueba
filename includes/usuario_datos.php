<?php
include("conexion.php");
session_start();

try{
    /* Intentamos hacer una consulta de la direccion por la ID del usuario */
    $sqlDir = "SELECT * FROM direcciones where id_usuario = ?";
    $obtenerDireccion = $conexion -> prepare($sqlDir);
    $obtenerDireccion -> execute([$_SESSION['Usuario']['id']]);
    $direccion = $obtenerDireccion ->fetch();
    /* asigno todos los datos a una session de direcciones */
    if($direccion){
    $_SESSION['Direccion'] = [
        "id"           => $direccion['id'],
        "departamento" => $direccion['departamento'],
        "ciudad"       => $direccion['ciudad'],
        "localidad"    => $direccion['localidad'],
        "calle"        => $direccion['calle'],
        "puerta"       => $direccion['nro_puerta'],

    ];}
    else {
        echo "No se encontró dirección para este usuario";
    }
}
catch(PDOException $e){
    /* Si ocurre un error se captura la excepcion y se muestra un mensaje con el codigo */
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
}
?>