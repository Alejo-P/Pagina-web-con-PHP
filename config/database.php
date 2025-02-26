<?
// config/database.php

class Conexion {
    private static $conexion;

    private function __construct() {}

    public static function getInstance() {
        if (!self::$conexion) {

            // Cargar las variables del archivo .env
            $host = $_ENV['MYSQL_HOST'];
            $user = $_ENV['MYSQL_USER'];
            $password = $_ENV['MYSQL_PASSWORD'];
            $database = $_ENV['MYSQL_DATABASE'];
            $port = $_ENV['MYSQL_PORT'];

            self::$conexion = new mysqli($host, $user, $password, $database, $port);
            if (self::$conexion->connect_error) {
                die("Conexión fallida: " . self::$conexion->connect_error);
            }
        }
        return self::$conexion;
    }
}
?>