<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "base_pagina";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los valores del formulario
    $cedula = $_POST['cedula'];
    $nombre = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contrasena'];
    $telefono = $_POST['contacto'];
    $confirmar_contraseña = $_POST['c_contrasena'];

    // Verificar si las contraseñas coinciden
    if ($contraseña !== $confirmar_contraseña) {
        echo "<script>alert('Las contraseñas no coinciden');</script>";
    } else {
        // Consulta SQL para insertar los datos
        $sql = "INSERT INTO Usuarios (cedula, Nombre, Correo, Contraseña, Telefono) VALUES ('$cedula', '$nombre', '$correo', '$contraseña', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Usuario registrado');</script>";
            // Redirigir al usuario a la página correspondiente
            header('Location: IniciarSesion.php');
        } else {
            echo "<script>alert('Error al registrar usuario: " . $conn->error . "');</script>";
        }
    }

    // Cerrar conexión
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
    <title>Registrarse</title>
</head>
<body class="Registro">
    <div class="container text-center">
        <div class="row"> 
            <div class="col">
                <h1><em>Bienvenid@ </em></h1>
                <img class="logo-forms" src="./Imagenes/Logo.jpg" alt="Logo">
                
                <img src="Imagenes/ImgInicio/img2.jpg" alt="">
            </div>
            <div class="col">
                <form action="#" class="formulario-ingreso" method="post">
                    <h2>Registro de usuarios</h2>
                    <div class="row">
                        <div class="col">
                            <label for="usuario">Usuario: </label><br>
                            <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" required><br>
                        </div>
                        <div class="col">
                            <label for="cedula">Cedula:</label><br>
                            <input type="number" id="cedula" name="cedula" placeholder="Numero de cedula" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="correo">Correo</label><br>
                            <input type="email" name="correo" id="correo" placeholder="ejemplo@gmail.com" required><br>
                        </div>
                        <div class="col">
                            <label for="contrasena">Contraseña: </label><br>
                            <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="contacto">Contacto</label><br>
                            <input type="number" name="contacto" id="contacto" placeholder="Número de telefono" required><br>
                        </div>
                        <div class="col">
                            <label for="c_contrasena">Confirmar contraseña: </label><br>
                            <input type="password" id="c_contrasena" name="c_contrasena" placeholder="Ingresar tu contraseña" required><br>
                        </div>
                    </div>
                    <label for="fecha">Fecha de nacimiento:</label><br>
                    <input type="date" name="fecha" id="fecha" required><br>
                    <div id="caja-elementos">
                        <a href="./IniciarSesion.php">¿Ya tienes cuenta?</a>
                    </div>
                    <div class="botones">
                        <button type="submit">Registrarse</button>
                        <button class="cancelar" onclick="Regresar()">Cancelar</button>  
                    </div>  
                </form>
            </div>
        </div>
    </div>
    <script>
        function Regresar(){
            window.location.href = "./Home.html";
        }
    </script>
</body>
</html>