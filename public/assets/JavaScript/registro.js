
let botonSiguiente = document.getElementById("btnSig");
let botonAnterior = document.getElementById("btnAnt");
let paso1 = document.getElementById("pasoUno");
let paso2 = document.getElementById("pasoDos");
let paso3 = document.getElementById("pasoTres");
let paso4 = document.getElementById("pasoCuatro");
let confirmar = document.getElementById("confirmar");
let barra2 = document.getElementById("contenedorDos");
let barra3 = document.getElementById("contenedorTres");
let barra4 = document.getElementById("contenedorCuatro");

let contadorPasos = 1;

let fallosPaso2 = 0;
let fallosPaso3 = 0;
let fallosPaso4 = 0;

botonSiguiente.addEventListener('click', function(){
let nombre = document.getElementById("nombreInput");
let apellido = document.getElementById("apellidoInput");
let nombreVacio = document.getElementById("spanEmptyName");
let apellidoVacio = document.getElementById("spanEmptyLastName");
if(contadorPasos == 1){
    let nombreValor = nombre.value.trim();
    let apellidoValor = apellido.value.trim();
    if(nombreValor != ""){
        if(apellidoValor != ""){
            paso1.style.display = "none";
            paso2.style.display = "flex";
            barra2.style.backgroundColor = "var( --color-VioletaOscuro)";
            contadorPasos += 1;
        }
        else{
        apellido.style.borderColor = "red";
        apellidoVacio.style.color = "red";
        apellidoVacio.style.display = "flex";
    }
    }
    else{
    nombre.style.borderColor = "red";
    nombreVacio.style.color = "red";
    nombreVacio.style.display = "flex";
}
}
let usuario = document.getElementById("userInput");
let contra = document.getElementById("passInput");
let repetir = document.getElementById("repeatInput");
let spanUsuario = document.getElementById("spanUsuario");
let spanContra = document.getElementById("spanContra");
let spanRepetir = document.getElementById("spanRepetir");
let noCoinciden = document.getElementById("noCoinciden");

if(contadorPasos == 2){
    let usuarioValor = usuario.value.trim();
    if(usuarioValor != ""){
        let contraValor = contra.value.trim();
        if(contraValor != ""){
            let repetirValor = repetir.value.trim();
            if(repetirValor != ""){
                if(contraValor === repetirValor){
                  paso2.style.display = "none";
                  paso3.style.display = "flex";
                  barra3.style.backgroundColor = "var( --color-VioletaOscuro)";
                  contadorPasos += 1;
                }
                else{
                    repetir.style.borderColor = "red";
                    noCoinciden.style.color = "red";
                    noCoinciden.style.display = "flex";
                    spanRepetir.style.display = "none";
                }
            }
            else{
                repetir.style.borderColor = "red";
                spanRepetir.style.color = "red";
                spanRepetir.style.display = "flex";
                noCoinciden.style.display = "none";
            }
        }
        else{
        contra.style.borderColor = "red";
        spanContra.style.color = "red";
        spanContra.style.display = "flex";
    }
    }
    else{
        if(fallosPaso2 == 1){
        usuario.style.borderColor = "red";
        spanUsuario.style.color = "red";
        spanUsuario.style.display = "flex";
        }
        else{
            fallosPaso2 += 1;
        }
}
}
let correo = document.getElementById("emailInput");
let numero = document.getElementById("numberInput");
let correoSpan = document.getElementById("emailVacio");
let numeroSpan = document.getElementById("telefonoVacio");
if(contadorPasos == 3){
    let correoValor = correo.value.trim();
    let numeroValor = numero.value.trim();

    if(correoValor != ""){
        if(numeroValor != ""){
            paso3.style.display = "none";
            paso4.style.display = "flex";
            barra4.style.backgroundColor = "var( --color-VioletaOscuro)";
            contadorPasos += 1;
        }
        else{
        numero.style.borderColor = "red";
        numeroSpan.style.color = "red";
        numeroSpan.style.display = "flex";
    }
    }
    else{
        if(fallosPaso3 == 1){
    correo.style.borderColor = "red";
    correoSpan.style.color = "red";
    correoSpan.style.display = "flex";
        }
        else{
            fallosPaso3 += 1;
        }
}
}

let depto = document.getElementById("depto");
let ciudad = document.getElementById("ciudad");
let localidad = document.getElementById("localidad");
let calle = document.getElementById("calle");
let puerta = document.getElementById("puerta");

let deptoSpan = document.getElementById("deptoVacio");
let ciudadSpan = document.getElementById("ciudadVacia");
let localidadSpan = document.getElementById("localVacia");
let calleSpan = document.getElementById("calleVacia");
let puertaSpan = document.getElementById("puertaVacia");

if(contadorPasos == 4){
    let deptoValor = depto.value.trim();
    let ciudadValor = ciudad.value.trim();
    let localidadValor = localidad.value.trim();
    let calleValor = calle.value.trim();
    let puertaValor = puerta.value.trim();

    if(deptoValor != ""){
        if(ciudadValor != ""){
            if(localidadValor != ""){
                if(calleValor != ""){
                    if(puertaValor != ""){
                        paso4.style.display = "none";
                        confirmar.style.display = "flex";
                        barra4.style.backgroundColor = "var( --color-VioletaOscuro)";
                        botonSiguiente.style.display = "none";
                        contadorPasos += 1;
                    }
                    else{
                        puerta.style.borderColor = "red";
                        puertaSpan.style.color = "red";
                        puertaSpan.style.display = "flex";
                    }
                }
                else{
                    calle.style.borderColor = "red";
                    calleSpan.style.color = "red";
                    calleSpan.style.display = "flex";
                }
            }
            else{
                localidad.style.borderColor = "red";
                localidadSpan.style.color = "red";
                localidadSpan.style.display = "flex";
            }
        }
        else{
        ciudad.style.borderColor = "red";
        ciudadSpan.style.color = "red";
        ciudadSpan.style.display = "flex";
    }
    }
    else{
        if(fallosPaso4 == 1){
    depto.style.borderColor = "red";
    deptoSpan.style.color = "red";
    deptoSpan.style.display = "flex";
        }
        else{
            fallosPaso4 += 1;
        }
}
}
});
botonAnterior.addEventListener('click', function(){
    if(contadorPasos == 5){
        confirmar.style.display = "none";
        paso4.style.display = "flex";
        botonSiguiente.style.display = "flex";
        contadorPasos -= 1;
    }
    else if(contadorPasos == 4){
            paso4.style.display = "none";
            paso3.style.display = "flex";
            barra4.style.backgroundColor = "transparent";
            contadorPasos -= 1;
    }
    else if(contadorPasos == 3){
            paso3.style.display = "none";
            paso2.style.display = "flex";
            barra3.style.backgroundColor = "transparent";
            contadorPasos -= 1;
    }
    else if(contadorPasos == 2){
            paso2.style.display = "none";
            paso1.style.display = "flex";
            barra2.style.backgroundColor = "transparent";
            contadorPasos -= 1;
    }
});