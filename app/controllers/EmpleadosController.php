<?php
// app/controllers/EmpleadosController.php

require_once '../app/models/Empleado.php';

class EmpleadosController {
    
    public function login() {
        // Si se recibe un POST, procesamos el login
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            
            $empleado_model = new EmpleadoModel();
            $resultado = $empleado_model->login($correo, $contrasena);

            if ($resultado) {
                // Si la verificación es correcta, redirigimos a dashboard
                header('Location: dashboard.php');
            } else {
                // Si no, mostramos un mensaje de error
                echo "Credenciales incorrectas";
            }
        }

        // Si no es un POST, mostramos el formulario de login
        require_once '../app/views/login.php';
    }

    public function dashboard() {
        // Aquí iría la lógica para el dashboard
        require_once '../app/views/dashboard.php';
    }
}
?>
