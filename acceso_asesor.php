<?php
if(isset($_POST['opcion'])) {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $database = "base_pagina";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } else {
        $opcion = $_POST['opcion'];

        // Construir la consulta SQL según la opción seleccionada
        if($opcion == "Historial") {
            $sql = "SELECT 
                u.Nombre as Dueño,
                c.Detalles,
                c.Estado,
                c.Vehiculo_asignado,
                c.Precio_total
            FROM historial
            JOIN usuarios u ON Cliente = u.cedula
            JOIN citas c ON Cita_asignada = c.id";
        } else {
            // Opción no válida
            echo "Opción no válida";
            exit; // Salir del script si la opción no es válida
        }

        // Ejecutar la consulta SQL
        $result = $conn->query($sql);

        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            // Obtener el número de columnas de los resultados
            $num_columns = $result->field_count;
            
            // Obtener los nombres de las columnas
            $column_names = [];
            while ($finfo = $result->fetch_field()) {
                $column_names[] = $finfo->name;
            }
            
            // Imprimir los encabezados de las columnas
            foreach ($column_names as $column_name) {
                echo "<th style='width: auto;'>$column_name</th>";
            }
            echo "</tr>";

            // Mostrar cada fila de datos
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                // Imprimir los valores de cada fila
                foreach ($row as $value) {
                    echo "<td style='max-width: 200px;'>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron usuarios";
        }
    }
}
?>