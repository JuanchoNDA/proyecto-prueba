<?php
include("../includes/conexion.php");
include("../includes/usuario_datos.php");

if(!isset($_SESSION['Usuario'])){
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/perfil.css">
    <title>COLOREAL - Perfil</title>
</head>
<body>
    <header>
        <section class="encabezado">
            <div class="userHeader">
                <?php $inicial = substr($_SESSION['Usuario']['nombre'], 0, 1) ?>
        <div class="fotoPerfil">
            <?=  $inicial ?>
        </div>
        <h1>
           Hola, <?= $_SESSION['Usuario']['nombre']?> <?= $_SESSION['Usuario']['apellido'] ?>.
        </h1>
        </div>
        <h2 class="IndicadorPagina">
            PERFIL
        </h2>
        </section>
    </header>
    <!-- 
         Esto es una ventana que se abre al tocar el boton de ajustes.
         Puedes encontrar lass funciones en script.js
          -->
        <div class="ventanaAjuste" id="visibilidadAjuste">
            <div id="cajaAjuste">
                <section class="logoAjuste">
               </section>
                <h3 id="tituloAjustes">AJUSTES</h3>
                
            <button id="botonIdioma">
                <p id="textoIdiomaP">Idioma</p><p id="textoIdioma">Español</p><p>🌎</p>
            </button>
            <form action="index.php" method="POST" class="ventanaIdioma" id="ventanaIdioma">
                    <input type="submit" value="Español" name="español">
                    <input type="submit" value="English" name="english">
                    <input type="submit" value="日本語" name="日本語">
                </form>

            <button>
                <p id="Asesoramiento">Asesoramiento</p><p>💬</p>
            </button>

            <button id="botonTema">
                <p id="temaP">Tema</p><p id="textoTema">🌞</p><p>🎨</p>
            </button>
                <form action="index.php" method="POST" class="ventanaTema" id="ventanaTema">
                    <input type="submit" value="Claro" name="claro" id="claro">
                    <input type="submit" value="Oscuro" name="oscuro" id="oscuro">
                </form>
            </div>
        </div>
    <main class="cuerpo">
        <section class="menu">
            <span class="AcercaDe">
                Acerca de
            </span>
            <button class="inicio" onclick="location.href='../index.php'">
                <span>
                Inicio <p>></p>
                </span>
            </button>
            <button class="mensaje" id="btnMensaje">
                <span>
                Mensajes <p>></p>
                </span>
            </button>
            <button class="editar" id="btnEditar">
                <span>
                Editar perfil <p>></p>
                </span>
            </button>
            <button class="direcciones" id="direcciones">
                <span>
                Direcciónes <p>></p>
                </span>
            </button>
            <button class="ayuda">
                <span>
                Ayuda <p>></p>
                </span>
            </button>
            <button onclick="location.href='logout.php'" class="logout">
                <span>
                Cerrar Sesión <p>></p>
                </span>
            </button>
        </section>
        <!--  Sección de informacion del usuario -->
        <section class="infoUsuario" id="infoUsuario">
            <h2>
                Información personal
            </h2>
            <span><p>Usuario</p> <p><?= $_SESSION['Usuario']['usuario'] ?></p></span>
            <span><p>Nombre</p> <p><?= $_SESSION['Usuario']['nombre'] ?></p></span>
            <span><p>Apellido</p> <p><?= $_SESSION['Usuario']['apellido'] ?></p></span>
            <span><p>Teléfono</p> <p><?= $_SESSION['Usuario']['telefono'] ?></p></span>
            <span><p>Correo electronico</p> <p><?= $_SESSION['Usuario']['email'] ?></p></span>
        </section>
            <!--  Sección de mensajería del usuario -->
        <section class="mensajesUsuario" id="mensajesUsuario">
            <h4>
                Mensajes
            </h4>
            <span>No tienes ningun mensaje</span>
        </section>
          <!--  Sección de editar el perfil de usuario -->
        <section class="editarUsuario" id="editarUsuario">
            <h5>
                Editar
            </h5>

            <span>
               <p>Foto</p>
               <button class="editarFoto">
               </button>
            </span>

            <span>
                <p><?= $_SESSION['Usuario']['usuario'] ?></p>
                <button class="btneditar">
                </button>
            </span>

            <span>
                <p><?= $_SESSION['Usuario']['nombre'] ?></p>
                <button class="editarNombre">
                </button>
            </span>

            <span>
                <p><?= $_SESSION['Usuario']['apellido'] ?></p>
                <button class="editarApellido">
                </button>
            </span>

            <span>
                <p><?= $_SESSION['Usuario']['email'] ?></p>
                <button class="editarCorreo">
                </button>
            </span>

            <span>
                <p><?= $_SESSION['Usuario']['telefono'] ?></p>
                <button class="editarNumero">
                </button>
            </span>

            <span>
                <p>Contraseña</p>
                <button class="editarContra">
                </button>
            </span>

        </section>
         <!--  Sección de informacion de direcciones -->
        <section class="direccionUsuario" id="direccionUsuario">
            <h6>
                Tus direcciónes
            </h6>
            <div class="cajaDireccion">
                <div>
                <p>
                     <?= $_SESSION['Direccion']['ciudad'] ?> 
                     <?=$_SESSION['Direccion']['departamento']?>
                     <?=$_SESSION['Direccion']['localidad']?>
                     <?=$_SESSION['Direccion']['calle']?>
                     <?=$_SESSION['Direccion']['puerta']?>
                </p>
                <button class="btnModificarDireccion">
                </button>
                </div>
            </div>
            <button class="agregarDireccion">
                +
            </button>
        </section>
    </main>
         <!-- 
            esto es una barra de navegacion pensada para usuarios de dispositibos mobiles,
            para mayor comodidad del usuario se mantendra en la parte inferior.
            *nota: tiene un display: none; asi que esta oculto por defecto a menos que el usuario ingrese a la web en un 
            dispositivo con una pantalla de ancho menor a 900px donde se activa la media query y hace visible el navMobile.
          -->
        <div class="navMobile" id="navMobile">
            <nav>
                <ul>
                    <li>
                    <button class="opcionCarritoMobile" onclick="location.href='carrito.php'">
                    </button>
                    </li>
                    <li>
                    <button class="opcionHomeMobile" onclick="location.href='../index.php'">
                    </button>
                    </li>
                    <li>
                    <button class="opcionAjustesMobile" id="opcionAjusteMobile">
                    </button>
                    </li>
                </ul>
            </nav>
        </div>
        <script src="assets/JavaScript/perfil.js">
        </script>
</body>
</html>