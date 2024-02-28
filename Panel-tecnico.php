<?php
// Verificar si se ha enviado la opción
if(isset($_POST['opcion'])) {
    // Conectar a la base de datos (reemplaza los valores con los de tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $database = "base_pagina";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener la opción seleccionada
    $opcion = $_POST['opcion'];

    // Dependiendo de la opción, puedes realizar diferentes consultas o acciones
    switch($opcion) {
        case "Ver mis tareas":
            // Consulta para obtener las tareas del técnico
            $sql = "SELECT * FROM Citas WHERE Tecnico_responsable = '456789123'"; // Reemplaza con tu consulta real
            break;
        case "Stock":
            // Consulta para obtener el stock de productos
            $sql = "SELECT * FROM productos WHERE stock > 0"; // Reemplaza con tu consulta real
            break;
        default:
            echo "Opción no válida";
    }

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

    // Cerrar la conexión
    $conn->close();
}
?>
