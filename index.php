<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


if($_SERVER["REQUEST_METHOD"] === "POST"){
/*
=========================================================
              guardado de Tema en session
=========================================================
*/
$temaClaro = $_POST['claro'] ?? null;
$temaOscuro = $_POST['oscuro'] ?? null;

if($temaClaro != null){
    $tema = "white";
$_SESSION['tema'] = $tema;
}
else if($temaOscuro != null){ 
    $tema = "black";
$_SESSION['tema'] = $tema;
}

/*
=========================================================
              guardado de idioma en session
=========================================================
*/

$IdiomaEsp = $_POST['español'] ?? null;
$IdiomaEng = $_POST['english'] ?? null;
$IdiomaJap = $_POST['日本語'] ?? null;

if($IdiomaEsp != null){
    $lenguaje = "esp";
$_SESSION['idioma'] = $lenguaje;
}

else if($IdiomaEng != null){
    $lenguaje = "eng";
$_SESSION['idioma'] = $lenguaje;
}

else if($IdiomaJap != null){
    $lenguaje = "jap";
$_SESSION['idioma'] = $lenguaje;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOREAL</title>
    <link rel="stylesheet" href="public/assets/css/style.css?">
</head>
<body>
<!-- 
=========================================================
             Estructura del header
=========================================================
-->

    <header id="cabeza">
        <button class="opcionAjuste" id="ajuste">
        </button>

        <div class= "logoBox">
        </div>

        <div class="cajaBuscador">
           <form action="">
            <input type="text" class ="inputBuscador" placeholder="Buscar producto..." id="inputBuscador">
            <input type="submit" value="" class="botonBucador">
           </form>
        </div>

        <nav class="opcionesUsuario">
            <ul>
                <li class="filtro" >
                    <button class="opcionFiltro" id="opcionFiltro">
                    </button>
                </li>
                <li class= "carrito">
                     <button class="opcionCarrito" onclick="location.href='public/carrito.php'">
                    </button>
                </li>
                <li class="cuenta">
                    <?php if(!isset($_SESSION['Usuario'])){ ?>
                       <button class="opcionCuenta" onclick="location.href='public/login.php'">
                       </button>
                    <?php }else{ ?>
                        <button class="opcionCuentaUsr" onclick="location.href='public/perfil.php'"
                         style="background-color: var(--color-rosaClaro); border: 1px solid var(--color-VioletaOscuro);
                        border: 1px solid var(--color-VioletaOscuro); height: 2rem; border-radius: 100%; width: 2rem;">
                            <?= substr($_SESSION['Usuario']['nombre'], 0, 1); ?>
                       </button>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </header>
<!-- 
=========================================================
             Estructura del Main
=========================================================
-->
    <main id="cuerpo">

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

         <!-- 
         Esto es una ventana que se abre al tocar el boton de Filtros.
         Puedes encontrar lass funciones en script.js
          -->
        <div class="ventanaFiltro" id="visibilidadFiltro">
            <div id="cajaFiltro">
                <h4 id="filtroH4">FILTROS</h4>
            <form action="index.php" method="GET" class="filtrosForm">
                <section class="paletaColores">
                </section>
                <p id="textoAplicacion">Modo de aplicación:</p>
                <input type="button" value="_   _   _">
                <p id="textoSuperficie">Superficie:</p>
                <input type="button" value="_   _   _">
                <p id="textoColor">Color:</p>
                <input type="button" value="_   _   _">
                <p id="textoPrecio">Precio minimo:</p>
                <input type="number" name="precioMinimo" min="0" max="500" step="10" placeholder="0 - 500">
                <p id="textoPrecioMax">Precio maximo:</p>
                <input type="number" name="precioMaximo" min="500" max="2000" step="10" placeholder="500 - 2000">
                <input type="submit" value="Aplicar" class="botonFiltro" id="btnFiltroAplicar">
            </form>
            </div>
        </div> 
        <!-- 
        banner que le da la bienvenida al usuario.
          -->
        <section class="bannerBienvenida" id="bannerBienvenida">
            <h1 id="bannerBienvenidaH">
                ¡Bienvenidos a COLOREAL!
            </h1>
            <p id="bannerBienvenidaP">
                Descubrí pinturas, asesoramiento y convinaciones pensadas para hacer de tu hogar o negocio un reflejo de vos.
            </p>
        </section>

        <!-- 
        Categorias de pinturas basada en su aplicacion.
          -->
        <section class="catalogoPinturas">
            <!-- 
            metales
          -->
            <div class="categoriaMaterial">
            <div class="metales">
              <p id="metales">
                METALES
              </p>
            </div>
             <!-- 
            maderas
          -->
            <div class="maderas">
                <p id="maderas">
                    MADERAS
                </p>
            </div>
            </div>
             <!-- 
            interior
          -->
            <div class="categoriaINTEXT">
            <div class="interior">
                <p id="interior">
                    INTERIOR
                </p>
            </div>
             <!-- 
            exterior
          -->
            <div class="exterior">
                <p id="exterior">
                    EXTERIOR
                </p>
            </div>
            </div>
        </section>

         <!-- 
            Esta es la seccion de articulos, aqui se van a cargar los productos dependiendo de la categoria,
            color, precio o nombre que haya especificado el usuario, si no busca nada se le mostrara articulos aleatorios.
          -->
        <section class="cajaArticulos" id="cajaArticulos">
            <h2 id="articulos">
                Articulos
            </h2>
            <hr>
            <div class="articulos">

            </div>
            <div class="moverme">
                <button>
                    <p id="anterior">
                        ANTERIOR
                    </p>
                </button>
                <button>
                    <p id="siguiente">
                        SIGUIENTE
                    </p>
                </button>
            </div>
        </section>

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
                    <button class="opcionCarritoMobile" onclick="location.href='public/carrito.php'">
                    </button>
                    </li>
                    <li>
                    <button class="opcionHomeMobile" onclick="location.href='index.php'">
                    </button>
                    </li>
                    <li class="cuentaMobile">
                       <?php if(!isset($_SESSION['Usuario'])){ ?>
                       <button class="opcionCuentaMobile" onclick="location.href='public/login.php'">
                       </button>
                    <?php }else{ ?>
                        <button class="opcionCuentaUsr" onclick="location.href='public/perfil.php'"
                        style="background-color: var(--color-rosaClaro); border: 1px solid var(--color-VioletaOscuro);
                        border: 1px solid var(--color-VioletaOscuro); height: 2rem; border-radius: 100%; width: 2rem;" >
                            <?= substr($_SESSION['Usuario']['nombre'], 0, 1); ?>
                       </button>
                    <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
<!-- 
=========================================================
             Estructura del Footer
=========================================================
-->
    <footer id="footer">
            <section class="redesSociales">
         <p id="seguinos">
            Seguinos
         </p>
        <ul>
            <li>
                <div class="redInstagram">
                <a href="">
                    
                </a>
                </div>
            </li>
            <li>
                <div class="redX">
                <a href="">
                    
                </a>
                </div>
            </li>
            <li>
                <div class="redFacebook">
                <a href="">
                    
                </a>
                </div>
            </li>
        </ul>
        </section>
        
        <section class="otros">
            <a href="" id="otrosCookies">Cookies</a>
            <hr>
            <a href="" id="otrosPrivacidad">Política de privacidad</a>
            <hr>
            <a href="" id="otrosLegales">Legales</a>
            <hr>
            <a href="" id="otrosContactanos">Contactanos</a>
        </section>
        <p id="copyright">&copy; 2025 COLOREAL. Todos los derechos reservados.</p>
    </footer>
    <script>
        let IdiomaValor = "<?php echo $_SESSION['idioma'] ?? ''; ?>";
        let temaValor = "<?php echo $_SESSION['tema'] ?? ''; ?>";
    </script>
    <script src="public/assets/JavaScript/script.js">
    </script>

</body>
</html>