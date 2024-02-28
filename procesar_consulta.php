<?php
if(isset($_POST['opcion'])) {
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
    } else {
        $opcion = $_POST['opcion'];
        // Construir la consulta SQL según la opción seleccionada
        if($opcion == "ver_clientes") {
            $sql = "SELECT * FROM Usuarios WHERE Tipo_usuario = 2";
        } elseif($opcion == "mantenimientos_realizados") {
            // Realizar consulta para mostrar mantenimientos realizados
            $sql = "SELECT Mantenimientos.id, Mantenimientos.vehiculo AS Placa, Usuarios.Nombre AS Responsable, Reparaciones.Detalles_reparacion AS Detalle
                    FROM Mantenimientos
                    JOIN Usuarios ON Mantenimientos.Responsable = Usuarios.cedula
                    JOIN Reparaciones ON Mantenimientos.vehiculo = Reparaciones.Vehiculo";
        } elseif($opcion == "inventario") {
            // Realizar consulta para mostrar inventario
            // Ejemplo: $sql = "SELECT * FROM Inventario";
        } elseif($opcion == "reporte_ventas") {
            // Realizar consulta para mostrar reporte de ventas
            // Ejemplo: $sql = "SELECT * FROM Ventas";
        } else {
            // Opción no válida
            echo "Opción no válida";
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
