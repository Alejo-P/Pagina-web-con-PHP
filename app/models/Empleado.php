<?php
// app/models/Empleado.php

class EmpleadoModel {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::getInstance();
    }

    // Función para verificar el login
    public function login($correo, $contrasena) {
        $query = "SELECT * FROM Empleado WHERE correo = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            return false; // No revelar si el correo no existe
        }

        $usuario = $result->fetch_assoc();

        // Verificamos la contraseña
        if (password_verify($contrasena, $usuario['contrasena'])) {
            return $usuario; // Devolvemos los datos del usuario
        }

        return false; // Credenciales incorrectas
    }

    // Función para registrar un empleado
    public function registrar(array $datos) {
        $cedula = $datos['cedula'];
        $nombre = $datos['nombre'];
        $contrasena = $datos['contrasena'];
        $cargo = $datos['cargo'];
        $correo = $datos['correo'];
        $telefono = $datos['telefono'];
        $estado = 1;
        $direccion = $datos['direccion'];

        // Verificamos si la cédula o el correo ya existen
        $query = "SELECT * FROM Empleado WHERE cedula = ? OR correo = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ss", $cedula, $correo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return "El usuario ya está registrado.";
        }

        // Insertamos el nuevo empleado
        $query = "INSERT INTO Empleado (cedula, nombre, contrasena, cargo, correo, telefono, estado, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $hashpass = password_hash($contrasena, PASSWORD_BCRYPT);
        $stmt->bind_param("ssssssis", $cedula, $nombre, $hashpass, $cargo, $correo, $telefono, $estado, $direccion);

        if ($stmt->execute()) {
            return "Registro exitoso.";
        } else {
            return "Error al registrar el empleado.";
        }
    }

    // Función para obtener un empleado por su correo
    public function obtenerPorCorreo($correo) {
        $query = "SELECT * FROM Empleado WHERE correo = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }
}

?>
