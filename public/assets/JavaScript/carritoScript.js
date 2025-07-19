/*======================================================================================================
                                 Temas
======================================================================================================
*/
/*
Llamamos a todos los elementos a los que queremos aplicarle el tema oscuro:
*/

let temaContenedorPrincipal = document.getElementById("contenedorPrincipal");
let temaTituloCarrito = document.getElementById("tituloCarrito");
let temaCuerpo = document.getElementById("cuerpo");
let temaNavMobile = document.getElementById("navMobile");
/*
Si el valor de la variable temaValor es igual a black (Seteado en el PHP del index.php), entonces asignamos los temas oscuros.
*/
if(temaValor === "black"){
    temaContenedorPrincipal.style.backgroundColor = "var(--color-GrisClaro)";  
    temaTituloCarrito.style.backgroundColor = "var(--color-GrisClaro)";
    temaCuerpo.style.background = "var(--color-degradadoOscuro)";
    temaNavMobile.style.backgroundColor = "var(--color-GrisClaro)";
}
/*
======================================================================================================
                                 IDIOMAS
======================================================================================================
*/

/*
Aqui se van a setear todos los idiomas disponibles dependiendo el valor en la session
del index.php.
si el valor de la variable IdiomaValor es igual a "esp" entonces no se hace nada por lo que la session queda null dejando el idioma 
por defecto, español. 
si el valor de la variable IdiomaValor es igual a "eng" entonces se activa la el primer if que re-esscribe todos los textos al 
idioma Inglés.
si el valor de la variable IdiomaValor es igual a "jap" entonces se activa la el segundo if que re-esscribe todos los textos al 
idioma Japonés.
*/

/*
Llamamos a todos los elementos a los que queremos aplicarle el idioma:
*/
let idiomaTituloTabla = document.getElementById("tituloTabla");
let temaH1 = document.getElementById("h1");
let temaSubtotal = document.getElementById("Subtotal");
let temaEnvio = document.getElementById("envio");
let temaIVA = document.getElementById("IVA");
let temaTdTotal = document.getElementById("tdTotal");
let temaPagar = document.getElementById("pagar");

if(IdiomaValor === "eng"){
    idiomaTituloTabla.textContent = "ORDER SUMMARY";
    temaH1.textContent = "SHOPPING CART";
    temaSubtotal.textContent = "Subtotal";
    temaEnvio.textContent = "Shipping";
    temaIVA.textContent = "TAX Incl.";
    temaTdTotal.textContent = "total";
    temaPagar.textContent = "Pay";
}
else if(IdiomaValor === "jap"){
    idiomaTituloTabla.textContent = "注文の概要";
    temaH1.textContent = "ショッピングカート";
    temaSubtotal.textContent = "サブトータル ";
    temaEnvio.textContent = "シッピング";
    temaIVA.textContent = "税込";
    temaTdTotal.textContent = "合計";
    temaPagar.textContent = "支払い";
}