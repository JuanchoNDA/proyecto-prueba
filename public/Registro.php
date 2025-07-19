<?php
include("../includes/conexion.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

//DATOS PERSONALES//
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$usuario = $_POST['Usuario'];
$contraHash = password_hash($_POST['Contrasena'], PASSWORD_BCRYPT);
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
/* try-catch para control de errores */
try{
$sqlUsr = "INSERT INTO usuarios (nombre, apellido, usuario, contrasena, email, telefono) VALUES (?, ?, ?, ?, ?, ?)";
$registrarUsuario = $conexion -> prepare($sqlUsr);
$registrarUsuario -> execute([$nombre, $apellido, $usuario, $contraHash, $email, $telefono]);
$idUsuario = $conexion->lastInsertId();
}
catch(PDOException $e){
    /* Si ocurre un error se captura la excepcion y se muestra un mensaje con el codigo */
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
}
//LOCALIDAD//
$departamento = $_POST['Depto'];
$ciudad = $_POST['Ciudad'];
$localidad = $_POST['Localidad'];
$calle = $_POST['Calle'];
$nroPuerta = $_POST['nroPuerta'];
/* try-catch para control de errores */
try{
$sqlLocal = "INSERT INTO direcciones (id_usuario, departamento, ciudad, localidad, calle, nro_puerta) VALUES (?, ?, ?, ?, ?, ?)";
$registrarDireccion = $conexion -> prepare($sqlLocal);
$registrarDireccion -> execute([$idUsuario, $departamento, $ciudad, $localidad, $calle, $nroPuerta]);
}
catch(PDOException $e){
    /* Si ocurre un error se captura la excepcion y se muestra un mensaje con el codigo */
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
}
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/Registro.css">
    <title>COLOREAL - Registrate</title>
</head>
<body>
 
   <section class="contenidoPrincipal" id="formulario">
   <h1>COLOREAL</h1>
   <p>Ingrsá tus datos aquí para registrarte</p>

<div class="contenedorPasos">
    <div class="contenedorUno">
        <p>Nombre</p>
    </div>
    <div id="contenedorDos">
        <p>Usuario</p>
    </div>
    <div id="contenedorTres">
        <p>Contato</p>
    </div>
    <div id="contenedorCuatro">
        <p>Dirección</p>
    </div>
</div>
<!-- 
=======================================================================================================
                                       Formulario de registro
=======================================================================================================
-->
<!-- 
Este formulario se hara por pasos que el usuario debe avanzar o retroceder haciendo click.
-->
    <form action="Registro.php" method="POST">
        <!-- Paso 1-->
<div class="Paso1" id="pasoUno">

<label for="nombre" class="nombreLabel">
    <span class="nameSpan">Nombre</span>
    <input type="text" name="Nombre" placeholder="Ingrese su nombre" id="nombreInput">
    <span class="spanEmptyName" id="spanEmptyName"> *El campo Nombre no puede estar vacío.</span>
</label>

<label for="apellido" class="apellidoLabel">
    <span class="apellidoSpan">Apellido</span>
    <input type="text" name="Apellido" placeholder="Ingrese su apellido"  id="apellidoInput">
    <span class="spanEmptyLastName" id="spanEmptyLastName"> *El campo Apellido no puede estar vacío.</span>
</label>

</div>
        <!-- Paso 2-->
<div class="Paso2" id="pasoDos">

<label for="usuario" class="usuarioLabel">
    <span class="userSpan">Usuario</span>
    <input type="text" name="Usuario" placeholder="Ingrese un usuario" id="userInput">
    <span class="spanUsuario" id="spanUsuario">*El campo Usuario no debe quedar vacío</span>
</label>

<label for="contra" class="contraLabel">
    <span class="userPass">Contraseña</span>
    <input type="password" name="Contrasena" placeholder="Ingrese contraseña" id="passInput">
    <span class="spanContra" id="spanContra">*El campo Contraseña no debe quedar vacío</span>
</label>

<label for="repetir" class="repetirLabel">
    <span class="spanRepeat">Repetir</span>
    <input type="password" name="repiteContrasena" placeholder="Repite la contraseña" id="repeatInput">
    <span class="spanRepetir" id="spanRepetir">*El campo Repetir contraseña no debe quedar vacío</span>
    <span class="noCoinciden" id="noCoinciden">*Las contraseñas no coinciden</span>
</label>

</div>
       <!-- Paso 3-->
<div class="Paso3" id="pasoTres">

<label for="email" class="emailLabel">
    <span class="emailSpan">Email</span>
    <input type="email" name="Email" placeholder="Ingrese su email" id="emailInput">
    <span class="emailVacio" id="emailVacio">El campo Email no debe quedar vacío</span>
</label>

<label for="telefono" class="telefonoLabel">
    <span class="telefonoSpan">Teléfono</span>
    <input type="number" name="Telefono" placeholder="Ingrese su teléfono" id="numberInput">
    <span class="telefonoVacio" id="telefonoVacio">El campo Teléfono no debe quedar vacío</span>
</label>

</div>
       <!-- Paso 4-->
<div class="Paso4" id="pasoCuatro">

<label for="depto" class="deptoLabel">
    <span class="spanDepto">Departamento</span>
    <input type="text" name="Depto" placeholder="Ingrese su departamento" id="depto">
    <span class="deptoVacio" id="deptoVacio">El campo Departamento no debe estar vacio</span>
</label>

<label for="ciudad" class="ciudadLabel">
    <span class="spanCiudad">Ciudad</span>
    <input type="text" name="Ciudad" placeholder="Ingrese su ciudad" id="ciudad">
    <span class="ciudadVacia" id="ciudadVacia">El campo Ciudad no debe estar vacio</span>
</label>

<label for="local" class="localLabel">
    <span class="spanLocalidad">Localidad</span>
    <input type="text" name="Localidad" placeholder="Ingrese su localidad" id="localidad">
    <span class="localVacia" id="localVacia">El campo Localidad no debe estar vacio</span>
</label>

<label for="calle" class="calleLabel">
    <span class="spanCalle">Calle</span>
    <input type="text" name="Calle" placeholder="ingrese su calle" id="calle">
    <span class="calleVacia" id="calleVacia">El campo Calle no debe estar vacio</span>
</label>

<label for="puerta" class="puertaLabel">
    <span class="spanPuerta">Puerta</span>
    <input type="text" name="nroPuerta" placeholder="Ingrese su numero de puerta" id="puerta">
    <span class="puertaVacia" id="puertaVacia">El campo Puerta no debe estar vacio</span>
</label>

</div>
       <!-- Confirmar envio -->
<div class="confirmar" id="confirmar">
    <p>Al registrarme estoy aceptando los <a href=""> Términos y condiciones </a> de COLOREAL.</p>
    <input type="submit" value="Registrarme" >
</div>

    </form>

    <div class="Botones">
      <button id="btnAnt">Retroceder</button>
      <button id="btnSig">Continuar</button>
    </div>

   </section>
</body>
<script src="assets/JavaScript/registro.js">
</script>
</html>