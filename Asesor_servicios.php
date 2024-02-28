<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="shortcut icon" href="Imagenes/Icono.jpeg" type="image/x-icon">
    <script src="JS/Script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Asesor de Servicio-Full Prestige</title>
</head>
<body>
   
    <section id="encabezado" class="encabezado">    
        <div class="logo">
            <img src="Imagenes/Logo.jpg" alt=""><br>
            <h1>Panel del Asesor de servicio</h1><br>

        </div> 

    </section>
   
        <div class="Contenido">
        
            <div class="contenido">
                <h2>¿Que acción deseas realizar?</h2> <br>
                <select id="Menu">
                
                   <option value="opcion1">"Elija una opción..."</option>
                   <option value="Receptar">Recepcion de vehiculos</option>
                   <option value="Asignar">Asignar Tareas</option>
                   <option value="Historial">Historial de Clientes</option>
            
                   
                </select>
        
            </div>
            <div class="Botones">
                <button class="buscar" onclick="buscar()">Buscar</button>
                <button class="eliminar" onclick="eliminar()">Eliminar</button> 
                
            </div>
            <button class="Volver" onclick="Casa()">Cerrar Sesión</button> 
    </section>
    
    <script>
        function Casa(){
            window.location.href="Home.html";
        };
        function buscar() {
            var opcionSeleccionada = document.getElementById("Menu").value;
            console.log(opcionSeleccionada);
            if (opcionSeleccionada !== "") {
                $.ajax({
                    url: 'acceso_asesorphp',
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