<?php
include("../includes/conexion.php");
session_start();

// Bandera para controlar cuándo mostrar el error
$mostrarErrorContra = false; 
$mostrarErrorUsuario = false;

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $contra = $_POST['contrasena'];
    try{
    $sqlObtener = "SELECT * FROM usuarios WHERE usuario = ?";
    $obtenerUsuario = $conexion -> prepare($sqlObtener);
    $obtenerUsuario -> execute([$usuario]);
    $resultado = $obtenerUsuario->fetch();
    }
    catch(PDOException $e){
    /* Si ocurre un error se captura la excepcion y se muestra un mensaje con el codigo */
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
    $mostrarErrorUsuario = true;
    }
    if($resultado){
    if($resultado && password_verify($contra, $resultado['contrasena'])){
        $_SESSION['Usuario'] = [
            "id"       => $resultado['id'],
            "usuario"  => $resultado['usuario'],
            "nombre"   => $resultado['nombre'],
            "apellido" => $resultado['apellido'],
            "email"    => $resultado['email'],
            "telefono" => $resultado['telefono'],
            "foto"     => $resultado['foto_perfil']
        ];
        header("Location: ../index.php");

        exit;
    }
    else {
        $mostrarErrorContra = true;    
        }
    }
    else{
        $mostrarErrorUsuario = true;
    }
 }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOREAL - Inicia sesión</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body> 
<section>
      <h1>Iniciar Sesión</h1>
    </h1>
    
    <form action="login.php" method="POST" class="formulario">

        <label for="username" class="usuarioLabel">
            <span class="spanUsuario">Usuario</span>
            <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" class="usuario" <?php if($mostrarErrorUsuario){?> style="border-color: Red;" <?php }?>>
            <?php if($mostrarErrorUsuario){?>
            <span style="color: Red;">*El usuario no existe</span>
            <?php }?>
        </label>

        <label for="contraseña" class="contraLabel">
            <span class="spanContra">Contraseña</span>
            <input type="password" id="contraseña" name="contrasena" placeholder="Ingresa tu contraseña" class="contra" <?php if($mostrarErrorContra){?> style="border-color: Red;" <?php }?>>
            <?php if($mostrarErrorContra){?>
            <span class="errorContra" style="color: red;">*Contraseña incorrecta</span>
             <?php }?>
        </label>

        <input type="submit" value="Ingresar" class="btnEnviar">

    </form>

    <p>¿No tienes cuenta? <a href="Registro.php">Regístrate aquí</a></p>
</section>
</body>
</html>