<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="shortcut icon" href="Imagenes/Icono.jpeg" type="image/x-icon">
    <script src="JS/Script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Full Prestige</title>
</head>
<body>

        <!-- ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <img src="Imagenes/Logo.jpg" alt="">   
            </div>
        
            <nav id="nav">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#acerca">Acerca de Nosostros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contactanos</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div> 
            <div class="Botones">
                <a href="./IniciarSesion.php" target="_blank" style="--clr:#FF0000" ><span>Iniciar Sesión</span> </a>
                <a href="./Registros.php" target="_blank" style="--clr:#FF0000" ><span>Registrarse</span> </a>
                
            </div>
        </header>
    </div>
    <!-- --SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-inicio">
            <h1><em>Empresa dedicada al mantenimiento, cuidado y reparación de tu vehículo.</em></h1>
            <div class="contenedor-video">
                <video width="640 " height="360" controls>
                    <source src="Videos/VideoOficial.mp4" type="video/mp4">
                </video>
            </div>
            <div class="siguenos">
                <p>Siguenos en todas nuestras redes Sociales</p>
            </div>
            <div class="redes">
                <a href="https://www.facebook.com/fullprestige20" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/full.prestige/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@fullprestige?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.youtube.com/@fullprestige357/videos" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://wa.me/593980688763" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>

            <nav class="nav2">
                <ul>
                    <li><a href="#metodos">Métodos de Pago</a></li>
                </ul>
            </nav>   
        </div>
    </section>



    <!-- SECCION ACERCA DE NOSOTROS -->
    <section id="acerca" class="acerca">
        <div class="contenido-seccion">
            <h2>NOSOTROS</h2>
        
            <p>Full Prestige es una empresa consolidada desde....., contamos con una amplia trayectoria y conformado por un excelente equipo de trabajo (EX TECNICOS DE TOYPTA) Nuestra mision, complacer y hacer realidad las espectativas de cada uno de nuetsros clientes. 
                Nuestro objetivo mejorar y superar los requerimientos para satisfaccion de la empresa, nuestro equipo y sobretodo nuestros clientes.
                Contamos con las mejores tecnologias y un excelente equipo de trabajo, con años de experiencia, ex tecnicos de Toyota.
                dam laudantium tenetur repudiandae, suscipit rem esse recusandae, distinctio quo labore. Non ratione, s
                imilique consequuntur quo consequatur repudiandae perspiciatis!
            </p>
            <h3>Somos Multimarca</h3>
            <div class="multimarca">
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon1.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon2.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon3.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon4.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon5.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon6.jpeg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon7.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon8.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon9.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon10.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon11.jpg" alt="">
                </div>
                <div class="marcas">
                    <img src="Imagenes/ImgAcerca/icon12.jpg" alt="">
                </div> 
            
            </div>
            <h3>Trabajamos con los mejores productos</h3> <br>
            <div class="Productos"> <br>


                <div class="producto">
                    <img src="Imagenes/ImgAcerca/pro1.jpg" alt="">
                </div>
                <div class="producto">
                    <img src="Imagenes/ImgAcerca/pro2.jpg" alt="">
                </div>
                <div class="producto">
                    <img src="Imagenes/ImgAcerca/pro3.jpg" alt="">
                </div>
                <div class="producto">
                    <img src="Imagenes/ImgAcerca/pro4.jpg" alt="">
                </div>
              
        </div>
    </section>

    <!-- SECCION SERVICIOS -->
    <section id="servicios" class="servicios">
        <div class="contenido-seccion">
            <h2>SERVICIOS</h2>
            <div class="galeria">
                <div class="proyecto">
                    <h4>Enderezada y Pintura</h4> <br>
                    <h4>Precio: 45.00 $</h4> <br>
                    <img src="Imagenes/ImgServ/Imagen1.jpeg" alt="">

                </div>
                <div class="proyecto">
                    <h4>Reparación de colisones</h4> <br>
                    <h4>Precio: 45.00 $</h4> <br>
                    <img src="Imagenes/ImgServ/Imagen2.jpeg" alt="">
                </div>

                <div class="proyecto">
                    <h4>Servicio Express</h4><br>
                    <h4>Precio: 45.00 $</h4> <br>
                    <img src="Imagenes/ImgServ/Imagen3.jpeg" alt="">
                </div>
                <div class="proyecto">
                    <h4>Mecanica en General</h4><br>
                    <h4>Precio: 45.00 $</h4> <br>
                    <img src="Imagenes/ImgServ/Imagen4.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTANOS</h2>
            <div class="fila">
                <!-- FORMULARIO -->
                <div class="col">
                    <input type="text" placeholder="Tu nombre">
                    <input type="text" placeholder="Numero Teléfono">
                    <input type="text" placeholder="Dirección de correo">
                    <input type="text" placeholder="Tema">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button>
                        Enviar Mensaje <i class="fa-solid fa-paper-plane"></i>
            
                    </button>
                </div>

                <!-- MAPA -->
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7574.439967442809!2d-78.45197548798788!3d-0.33444451232886957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5bd62fd7cd6c3%3A0xdfe040bb17af6d28!2sFull%20Prestige!5e0!3m2!1ses!2sec!4v1707584098101!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Sangolqui-España 686 (Detrás de la Nova Clinica del Valle)
                            </li>
                            <li>
                                <i class="fa-brands fa-whatsapp"></i>
                                Contactame: 0980688763
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: miguel_sdq@hotmail.es
                            </li>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                Horario de atención: <br>
                                Lunes-Viernes (8:00 am - 5:00 pm) <br>
                                Sabado (8:00 am - 1:00 pm) <br>
                                Domingo (No hay atención)
                            </li>
                            
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>   

    <!-- SECCION METODOS DE PAGO -->
    <section id="metodos" class="metodos">
        <div class="contenido-seccion">
            <h2>MÉTODOS DE  PAGO</h2>
            <h4>Tarjetas de crédito y débito</h4>
            <div class="galeria">
                <div class="proyecto">
                    <img src="Imagenes/ImgMetodos/tarjeta1.jpg" alt="">
                </div>
                <div class="proyecto">
                    <img src="Imagenes/ImgMetodos/tarjeta2.png" alt="">
                </div>

                <div class="proyecto">
                    <img src="Imagenes/ImgMetodos/tarjeta3.png" alt="">
                </div>
                <div class="proyecto">
                    <img src="Imagenes/ImgMetodos/tarjeta4.png" alt="">
                </div>
            
                <div class="proyecto">
                    <img src="Imagenes/ImgMetodos/tarjeta5.jpg" alt="">
           
                </div>
                <div class="proyecto">
                    <h4>Pago en efectivo</h4>
                    <img src="Imagenes/ImgMetodos/efectivo.jpg" alt="">
                </div>
                <div class="proyecto">
                    <h4>Transferencia Bancaria</h4>
                    <img src="Imagenes/ImgMetodos/transfer.jpg" alt="">
                </div>
                <div class="proyecto">
                    <h4>Cheques</h4> 
                    <img src="Imagenes/ImgMetodos/checke.jpg" alt="">
                   
                </div>
                
            </div>
        </div>
    </section>
    <footer>
        <p>© 2024 Full Prestige</p>
        <h2>FRONTED: Silvia Chaluisa </h2>
        <h2>BACKEND: Marcelo Pinzón</h2>
        <a href="#inicio" class="arriba">
            
            <i class="fa-solid fa-angles-up"></i>
        </a>

    </footer>
    
</body>
</html>
