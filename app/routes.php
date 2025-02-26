<?
// app/routes.php

// Verifica si la ruta es válida y redirige al controlador correspondiente
function routes() {
    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    } else {
        $route = 'login';  // Si no se pasa una ruta, va al login
    }

    switch ($route) {
        case 'login':
            $controller = new EmpleadosController();
            $controller->login();
            break;
        case 'dashboard':
            $controller = new EmpleadosController();
            $controller->dashboard();
            break;
        default:
            echo "Página no encontrada";
    }
}
?>