//BOTON CANCELAR
function Regresar(){
    window.location.href="IniciarSesion.php";
};
// Boton Registrarse
function Volver(){
    window.location.href="IniciarSesion.php";
};
//Boton Salir
function Casa(){
    window.location.href="/";
};
//Boton del Menu Hamburguesa
let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}

function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList = "";
    menuVisible = false;
}

//BOTON VOLVER DE LA PAGINA RECUPERAR CONTRASEÑA
function volver1(){
    window.location.href="IniciarSesion.php";
}

//BOTON ENVIAR CODIGO DE LA PAGINA RECUPERAR CONTRASEÑA
function enviarCodigo() {
    alert("¡Tu código ha sido enviado con éxito!");
}


