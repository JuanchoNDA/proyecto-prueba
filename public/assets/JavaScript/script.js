/*
Este es el archivo JavaScript principal y corresponde tanto al archivo
index.php como al archivo style.css.

Las principales funciones manejadas aqui son:
-Manejo de ventanas desplegables.
-Seteo de estilos CSS.
 */
let inputBuscador = document.getElementById("inputBuscador");
let btnSiguiente = document.getElementById("siguiente");
let btnAnterior = document.getElementById("anterior");
/*
======================================================================================================
                                 Ventanas desplegables
======================================================================================================
*/
//obtengo los elementos
let ventanaAjuste = document.getElementById("visibilidadAjuste");
let botonAjuste = document.getElementById("ajuste");

let ventanaFiltro = document.getElementById("visibilidadFiltro");
let botonFiltro = document.getElementById("opcionFiltro");

let ventanaTema = document.getElementById("ventanaTema");
let BotonTema = document.getElementById("botonTema");

let ventanaIdioma = document.getElementById("ventanaIdioma");
let botonIdioma = document.getElementById("botonIdioma");


//funcion del boton Idioma
botonIdioma.addEventListener('click', function(){
    //si el display es none lo setea en block para que sea visible
    if(ventanaIdioma.style.display === "none"){
        ventanaIdioma.style.display = "block";
        ventanaTema.style.display = "none";
    }
    //de lo contrario lo setea en none para que se oculte
    else{
        ventanaIdioma.style.display = "none";
    }
});
//funcion del boton tema
botonTema.addEventListener('click', function(){
    //si el display es none lo setea en block para que sea visible
    if(ventanaTema.style.display === "none"){
        ventanaTema.style.display = "block";
        ventanaIdioma.style.display = "none";
    }
    //de lo contrario lo setea en none para que se oculte
    else{
        ventanaTema.style.display = "none";
    }
});
//funcion del boton ajuste
botonAjuste.addEventListener('click', function(){
    //si el display es none lo setea en block para que sea visible
    if(ventanaAjuste.style.display === "none"){
        //bloqueo la ventana de filtro con display: none; si esta abierta para que no se sobrepongan.
        ventanaFiltro.style.display = "none";
        ventanaAjuste.style.display = "block";
    }
    //de lo contrario lo setea en none para que se oculte
    else{
        ventanaAjuste.style.display = "none";
    }
});
//funcion del boton filtro
botonFiltro.addEventListener('click', function(){
    //si el display es none lo setea en block para que sea visible
    if(ventanaFiltro.style.display === "none"){
        //bloqueo la ventana de ajuste con display: none; si esta abierta para que no se sobrepongan.
        ventanaAjuste.style.display = "none";
        ventanaFiltro.style.display = "block";
    }
    //de lo contrario lo setea en none para que se oculte
    else{
        ventanaFiltro.style.display = "none";
    }
});
/*
======================================================================================================
                                 Temas
======================================================================================================
*/
/*
Llamamos a todos los elementos a los que queremos aplicarle el tema oscuro:
*/

let temaTexto = document.getElementById("textoTema");
let temaCabeza = document.getElementById("cabeza");
let temaCuerpo = document.getElementById("cuerpo");
let temaBannerBienvenida = document.getElementById("bannerBienvenida");
let temaCajaArticulos = document.getElementById("cajaArticulos");
let temaFooter = document.getElementById("footer");
let temaAjuste = document.getElementById("cajaAjuste");
let temaFiltro = document.getElementById("cajaFiltro");
let temaNavMobile = document.getElementById("navMobile");

/*
Si el valor de la variable temaValor es igual a black (Seteado en el PHP del index.php), entonces asignamos los temas oscuros.
*/
if(temaValor === "black"){
    temaTexto.textContent = "🌙";
    
    temaCuerpo.style.backgroundColor = "var(--color-GrisClaro)";
    temaCabeza.style.background = "var(--color-GrisClaro)";
    temaNavMobile.style.background = "var(--color-GrisClaro)";
    temaCajaArticulos.style.backgroundColor = "var(--color-GrisClaro)";
    temaBannerBienvenida.style.background = "var(--color-degradadoOscuro)";
    temaFooter.style.background = "var(--color-degradadoOscuro)";
    temaAjuste.style.background = "var(--color-degradadoOscuro)";
    temaFiltro.style.background = "var(--color-degradadoOscuro)";

    ventanaAjuste.style.display = "none";

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
Llamamos a todos los elementos a los que queremos aplicarle el idioma inglés:
*/
/*Ajustes*/
let IdiomaTituloAjustes = document.getElementById("tituloAjustes");
let IdiomaTexto = document.getElementById("textoIdiomaP");
let IdiomaAsesoramiento = document.getElementById("Asesoramiento");
let IdiomaTemaP = document.getElementById("temaP");
let IdiomaClaro = document.getElementById("claro");
let IdiomaOscuro = document.getElementById("oscuro");
let IdiomaTextoBtn = document.getElementById("textoIdioma");
/*Banner*/
let IdiomabannerBienvenida = document.getElementById("bannerBienvenidaH");
let IdiomabannerBienvenidaP = document.getElementById("bannerBienvenidaP");
/*Categorias*/
let IdiomaMetales = document.getElementById("metales");
let IdiomaMaderas = document.getElementById("maderas");
let IdiomaInterior = document.getElementById("interior");
let IdiomaExterior = document.getElementById("exterior");
/*Footer*/
let IdiomaOtrosCookies = document.getElementById("otrosCookies");
let IdiomaOtrosPrivacidad = document.getElementById("otrosPrivacidad");
let IdiomaSeguinos = document.getElementById("seguinos");
let IdiomaOtrosLegales = document.getElementById("otrosLegales");
let IdiomaOtrosContactanos = document.getElementById("otrosContactanos");
let IdiomaCopyright = document.getElementById("copyright");
/*Articulos*/
let IdiomaArticulos = document.getElementById("articulos");
/*Filtros*/
let IdiomaFiltroH4 = document.getElementById("filtroH4");
let IdiomTextoAplicacion = document.getElementById("textoAplicacion");
let IdiomaTextoSuperficie = document.getElementById("textoSuperficie");
let IdiomaTextoPrecio = document.getElementById("textoPrecio");
let IdiomatextoPrecioMax = document.getElementById("textoPrecioMax");
let IdiomaBtnFiltroAplicar = document.getElementById("btnFiltroAplicar");

if (IdiomaValor === "eng") {
    /*Header */
    inputBuscador.placeholder = "Search product...";
    /*Filtros */
    IdiomaFiltroH4.textContent = "filter";
    IdiomTextoAplicacion.textContent = "Mode of application:";
    IdiomaTextoSuperficie.textContent = "Surface:";
    IdiomaTextoPrecio.textContent = "Minimum price:";
    IdiomatextoPrecioMax.textContent = "Maximum price:";
    IdiomaBtnFiltroAplicar.value = "Apply";
    /*Ajustes */
    IdiomaTextoBtn.textContent = "English";
    IdiomaTituloAjustes.textContent = "Settings";
    IdiomaTexto.textContent = "Language";
    IdiomaAsesoramiento.textContent = "Advice";
    IdiomaTemaP.textContent = "Theme";
    IdiomaClaro.value = "Light";
    IdiomaOscuro.value = "Dark";
    /*Banner */
    IdiomabannerBienvenida.innerText = "¡Welcome to COLOREAL!";
    IdiomabannerBienvenidaP.innerText = "Discover paints, advice, and combinations designed to make your home or business a reflection of yourself.";
    /*categorias */
    IdiomaMetales.textContent = "Metals";
    IdiomaMaderas.textContent = "Woods";
    IdiomaInterior.textContent = "Interior";
    IdiomaExterior.textContent = "Exterior";
    /*Articulos */
    IdiomaArticulos.textContent = "Articles";
    btnAnterior.textContent = "back";
    btnSiguiente.textContent = "next";
    /*Footer */
    IdiomaOtrosCookies.textContent = "Cookies";
    IdiomaOtrosPrivacidad.textContent = "Privacy Policy";
    IdiomaSeguinos.textContent = "Follow us";
    IdiomaOtrosLegales.textContent = "Legals";
    IdiomaOtrosContactanos.textContent = "Contact us";
    IdiomaCopyright.textContent = "© 2025 COLOREAL. All rights reserved.";
}
  else if (IdiomaValor === "jap") {
    /*Header */
    inputBuscador.placeholder = "商品を探す。。。";
    /*Filtros */
    IdiomaFiltroH4.textContent = "フィルター";
    IdiomTextoAplicacion.textContent = "使用方法:";
    IdiomaTextoSuperficie.textContent = "表面：";
    IdiomaTextoPrecio.textContent = "最低価格:";
    IdiomatextoPrecioMax.textContent = "最高価格：";
    IdiomaBtnFiltroAplicar.value = "適用する";
    /*Ajustes */
    IdiomaTextoBtn.textContent = "日本語";
    IdiomaTituloAjustes.textContent = "設定";
    IdiomaTexto.textContent = "言語";
    IdiomaAsesoramiento.textContent = "アドバイス";
    IdiomaTemaP.textContent = "テーマ";
    IdiomaClaro.value = "ライト";
    IdiomaOscuro.value = "ダーク";
    /*Banner */
    IdiomabannerBienvenida.innerText = "ようこそ、COLOREALへ！";
    IdiomabannerBienvenidaP.innerText = "あなたの家やビジネスがあなた自身を映し出すようにデザインされた、塗料、アドバイス、そして組み合わせを見つけましょう。";
    /*categorias */
    IdiomaMetales.textContent = "金属";
    IdiomaMaderas.textContent = "木材";
    IdiomaInterior.textContent = "インテリア";
    IdiomaExterior.textContent = "外装";
    /*Articulos */
    IdiomaArticulos.textContent = "記事";
    btnAnterior.textContent = "前へ";
    btnSiguiente.textContent = "次へ";
    /*Footer */
    IdiomaOtrosCookies.textContent = "クッキー";
    IdiomaOtrosPrivacidad.textContent = "プライバシーポリシー";
    IdiomaSeguinos.textContent = "フォローしてください";
    IdiomaOtrosLegales.textContent = "法的事項";
    IdiomaOtrosContactanos.textContent = "お問い合わせください";
    IdiomaCopyright.textContent = "© 2025 COLOREAL. 全著作権所有。";
}