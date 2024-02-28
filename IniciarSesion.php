<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "2004";
    $database = "base_pagina";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $tipo_usuario = $_POST['tipo_usuario'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Validar el tipo de usuario y realizar la consulta correspondiente
    if ($tipo_usuario == "Clientes") {
        $sql = "SELECT * FROM Usuarios WHERE Correo = '$usuario' AND Contraseña = '$contrasena' AND Tipo_usuario = 2";
    } elseif ($tipo_usuario == "Administrador") {
        $sql = "SELECT * FROM Usuarios WHERE Correo = '$usuario' AND Contraseña = '$contrasena' AND Tipo_usuario = 1";
    } elseif ($tipo_usuario == "Asesor de servicio") {
        $sql = "SELECT * FROM Usuarios WHERE Correo = '$usuario' AND Contraseña = '$contrasena' AND Tipo_usuario = 4";
    } elseif ($tipo_usuario == "Técnico") {
        $sql = "SELECT * FROM Usuarios WHERE Correo = '$usuario' AND Contraseña = '$contrasena' AND Tipo_usuario = 3";
    } else {
        echo "Tipo de usuario no válido";
        exit; // Termina el script si el tipo de usuario no es válido
    }

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Iniciar sesión y redirigir al usuario a la página correspondiente
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo_usuario'] = $tipo_usuario;
        if  ($tipo_usuario == "Clientes"){
            // Redirigir al usuario a la página correspondiente
            header('Location: Clientes.php');
        }
        else if ($tipo_usuario == "Administrador"){
            // Redirigir al usuario a la página correspondiente
            header('Location: Admin.php');
        } elseif ($tipo_usuario  == 'Técnico'){
            // Redirigir al usuario a la página correspondiente
            header("Location: Tecnico.php");
        }else {
            header("Asesor de servicio.php");
        }
        
    } else {
        echo "Inicio de sesión fallido. Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="Imagenes/Icono.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <script src="JS/Script.js"></script>
    <title>IniciarSesion</title>
   
</head>
<body class="Inicio">
    <div class="container text-center"> 
        <div class="row">
            <div class="col">
                <h1><em>Bienvenid@ </em></h1>
                <img class="logo-forms" src="./Imagenes/Logo.jpg" alt="Logo">
        
            </div>
            

            
            <div class="col"> 
                <form action="#" class="formulario-ingreso" method="post">
                    <h2>Inicio de sesión</h2> <br>
                    <select id="miMenuDesplegable" name="tipo_usuario">
        
                        <option value="opcion1">Seleccione el tipo de usuario..</option>
                        <option value="Clientes">Clientes</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Asesor de servicio">Asesor de servicio</option>
                        <option value="Técnico">Técnico</option>
                    </select><br>
                    
                    <label for="usuario">Email: </label><br>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu nombre de usuario" required><br>
                    
                    <label for="contrasena">Contraseña: </label><br>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contrasena" required><br>
                    
                    <div id="caja1"> <br>
                        <a href="./Registrarse.html">¿Aun no tienes cuenta?</a><br>
                        
                    </div>
                    <div id="caja2"> <br>
                        <a href="RecuperarContraseña.html" id="olvidasteContrasena">¿Olvidaste la contraseña?</a>
                    </div>
            
                    <div class="botones"> 
                        <button type="submit">Ingresar</button>
                        <button class="cancelar" onclick="Regresar()">Cancelar</button>      
                    </div>                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>

