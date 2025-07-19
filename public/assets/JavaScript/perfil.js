/* Botones */
let mensaje = document.getElementById('btnMensaje');
let editar = document.getElementById('btnEditar');
let direccion = document.getElementById('direcciones');
/* Secciones */
let infoUsuario = document.getElementById('infoUsuario');
let mensajesUsuario = document.getElementById('mensajesUsuario');
let editarUsuario = document.getElementById('editarUsuario');
let direccionUsuario = document.getElementById('direccionUsuario');
mensaje.addEventListener('click', function(){

    if(getComputedStyle(mensajesUsuario).display === "none"){
        mensajesUsuario.style.display = "flex";
        infoUsuario.style.display = "none";
        editarUsuario.style.display = "none";
        direccionUsuario.style.display = "none";
    }
    else{
        infoUsuario.style.display = "flex";
        mensajesUsuario.style.display = "none";
    }
});

editar.addEventListener('click', function(){
    if(getComputedStyle(editarUsuario).display == "none"){
        editarUsuario.style.display = "flex";
        infoUsuario.style.display = "none";
        mensajesUsuario.style.display = "none";
        direccionUsuario.style.display = "none";
    }
    else{
        infoUsuario.style.display = "flex";
        editarUsuario.style.display = "none";
    }
});

direccion.addEventListener('click', function(){
    if(getComputedStyle(direccionUsuario).display == "none"){
        direccionUsuario.style.display = "flex";
        infoUsuario.style.display = "none";
        mensajesUsuario.style.display = "none";
        editarUsuario.style.display = "none";
    }
    else{
        infoUsuario.style.display = "flex";
        direccionUsuario.style.display = "none";
    }
});
/*
======================================================================================================
                                 Ventanas desplegables
======================================================================================================
*/
//obtengo los elementos
let ventanaAjuste = document.getElementById("visibilidadAjuste");
let botonAjuste = document.getElementById("opcionAjusteMobile");
//funcion del boton ajuste
botonAjuste.addEventListener('click', function(){
    //si el display es none lo setea en block para que sea visible
    if(ventanaAjuste.style.display === "none"){
        ventanaAjuste.style.display = "block";
    }
    //de lo contrario lo setea en none para que se oculte
    else{
        ventanaAjuste.style.display = "none";
    }
});