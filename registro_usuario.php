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

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO Usuarios (cedula, Nombre, Correo, Contraseña, Telefono) VALUES ('$cedula', '$nombre', '$correo', '$contraseña', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario registrado');</script>";
    } else {
        echo "<script>alert('Error al registrar usuario: " . $conn->error . "');</script>";
    }

    // Cerrar conexión
    $conn->close();
}
?>
