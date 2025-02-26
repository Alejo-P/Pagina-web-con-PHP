<?
// public/index.php
require_once 'vendor/autoload.php';  // Asegúrate de tener Composer autoload

// Cargar las variables del archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once '../app/routes.php';  // Incluye el archivo con las rutas
routes();  // Llama a la función que maneja las rutas
?>