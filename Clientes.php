<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="shortcut icon" href="Imagenes/Icono.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="Imagenes/Icono.jpeg" type="image/x-icon">
    <script src="JS/Script.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Bienvenido</title>
</head>
<body>
    
        <section id="encabezado" class="encabezado">
            
            <div class="logo">
                <img src="Imagenes/Logo.jpg" alt=""><br>
                <h1><em>Bienvenido a Full Prestige</em></h1><br>
            </div> 
        </section>
          
        <section id="bienvenido" class="bienvenido">
        <div class="modulos">
            <div class="modulo">
                <h2>Agendamiento de citas</h2> <br>
                <img src="Imagenes/ImgBienvenido/Img1.png" alt="">
            </div>
            <div class="modulo">
                <h2>Estado de mi vehículo</h2><br>
                <img src="Imagenes/ImgBienvenido/Img2.jpg" alt="">
            </div>
            <div class="modulo">
                <h2>Realizar Pago</h2><br>
                <img src="Imagenes/ImgBienvenido/Img3.jpg" alt="">
            </div>
            <div class="modulo">
                <h2>Facturas</h2><br>

                <img src="Imagenes/ImgBienvenido/Img4.jpg" alt="">
                <button >Imprimir</button>
            </div>	

        </div>

        <div class="Botonsalir">
            <button class="BSalir" onclick='Casa()'>Salir</button>
        </div>
          
    </section>
    <script>
        function Casa(){
            window.location.href="Home.html";
        };
    </script>

    <!-- SECCION AGENDAMIENTO DE CITAS ------------------------------------------------------------------->
    <!-- SECCION SEGUIMIENTO EN TIEMPO REAL -------------------------------------------------------------->
     <!-- SECCION REALIZAR PAGOS ------------------------------------------------------------------------->
    <!-- SECCION FACTURAS -------------------------------------------------------------------------------->
</body>
</html>