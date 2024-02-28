//BOTON CANCELAR
function Regresar(){
    window.location.href="Home.html";
}

// BOTON INGRESAR
function ingresar() {
    window.location.href = "./Bienvenido.html";
   
    
}

   


// Boton Registrarse
function Volver(){
    window.location.href="IniciarSesion.html";
}
//Boton Salir
function salir(){
    window.location.href="Home.html";
}
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
    window.location.href="IniciarSesion.html";
}

//BOTON ENVIAR CODIGO DE LA PAGINA RECUPERAR CONTRASEÑA
function enviarCodigo() {
    alert("¡Tu código ha sido enviado con éxito!");
}


