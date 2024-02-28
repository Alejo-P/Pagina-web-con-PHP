<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="shortcut icon" href="Imagenes/Icono.jpeg" type="image/x-icon">
    <script src="JS/Script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Administrador-Full Prestige</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <section id="encabezado" class="encabezado">    
        <div class="logo">
            <img src="Imagenes/Logo.jpg" alt=""><br>
            <h1>Panel de Administración</h1><br>
        </div> 
    </section>
   
    <div class="Contenido">
        <div class="contenido">
            <h2>¿Qué acción deseas realizar?</h2> <br>
            <select id="Menu">
               <option value="">Elija una opción...</option>
               <option value="ver_clientes">Ver lista Clientes</option>
               <option value="mantenimientos_realizados">Mantenimientos Realizados</option>
               <option value="inventario">Inventario</option>
               <option value="reporte_ventas">Reporte de Ventas</option>
            </select>
        </div>
        <div class="Botones">
            <button class="buscar" onclick="buscar()">Buscar</button>
            <button class="eliminar" onclick="eliminar()">Eliminar</button> 
        </div>
        <button class="Volver" onclick="volver1()">Cerrar Sesión</button> 
    </div>
    
    <div id="resultado"></div>
    
    <script>
        function buscar() {
            var opcionSeleccionada = document.getElementById("Menu").value;
            if (opcionSeleccionada !== "") {
                $.ajax({
                    url: 'procesar_consulta.php',
                    type: 'POST',
                    data: {opcion: opcionSeleccionada},
                    success: function(response) {
                        $('#resultado').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            }
        }
    </script>
</body>
</html>