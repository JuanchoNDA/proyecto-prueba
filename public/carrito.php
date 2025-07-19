<?php
include("../includes/conexion.php");
session_start();
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
    <title>Coloreal carrito</title>
    <link rel="stylesheet" href="assets/css/carrito.css">
</head>
<body id="cuerpo">
    <header class="tituloCarrito" id="tituloCarrito">
        <H1 id="h1">
            CARRITO DE COMPRAS
        </H1>
        <nav class="opcionesUsuario">
            <ul>
                <li class="inicio" >
                    <button class="opcionInicio" onclick="location='../index.php'">
                    </button>
                </li>
                <li class= "ajuste">
                     <button class="opcionAjuste" id="opcionAjuste">
                    </button>
                </li>
                <li class="cuenta">
                       <button class="opcionCuenta" onclick="location='perfil.php'">
                       </button>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contenedorPrincipal" id="contenedorPrincipal">
            <DIV class="productosCarrito">
                <div class="producto">

                </div>
            </DIV>
            <DIV class="valorOrden">
                <div class="resumen">
                    <table>
                        <thead class="tituloTabla">
                        <tr>
                        <th id="tituloTabla">RESUMEN DEL PEDIDO</th>
                        </tr>
                        </thead>  

                        <tr>
                            <td id="Subtotal">
                                Subtotal <div class="importantSVG"></div>
                            </td>
                            <td>
                                0.00
                            </td>
                        </tr>
                        <tr>
                            <td id="envio">
                                Envío <div class="importantSVG"></div>
                            </td>
                            <td>
                                0.00
                            </td>
                        </tr>
                        <tr>
                            <td id="IVA">
                                IVA incl. <div class="importantSVG"></div>
                            </td>
                            <td>
                                0.00
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pago">
                    <table class="total">
                        <tr>
                            <td id="tdTotal">
                               Total:
                            </td>
                            <td>
                                0.00
                            </td>
                        </tr>
                    </table>
                    <div class="btnPagar">
                    <button class="pagar" id="pagar">
                        Pagar
                    </button>
                    </div>
                </div>
            </DIV>
        </section>
        <div class="navMobile" id="navMobile">
            <nav>
                <ul>
                    <li>
                        <button class="opcionAjusteMobile" id="opcionAjusteMobile">
                        </button>
                    </li>
                    <li>
                        <button class="opcionHomeMobile" onclick="location='../index.php'">
                        </button>
                    </li>
                    <li>
                        <button class="opcionCuentaMobile"  onclick="location='perfil.php'">
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <script>
        let temaValor = "<?php echo $_SESSION['tema'] ?? ''; ?>";
        let IdiomaValor = "<?php echo $_SESSION['idioma'] ?? ''; ?>";
    </script>
    <script src="assets/JavaScript/carritoScript.js">
    </script>
</body>
</html>