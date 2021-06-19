
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LosNobles</title>
    <link rel="stylesheet" href="hojaestilos.css">
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="img\favicon.ico" />
</head>

<body>
    <main>

        <div class="content-all">
            <header></header>
            <div class="topnav">
                <a class="active" href="index.html">Inicio</a>

                <a href="pag4.html">Misión, Visión y Valores</a>
                <a href="pag3.html">Organización</a>
                <a href="pagGaleria.html">Galería</a>
                <a href="pagServicios.html">Servicios</a>
                <a href="pag1.html">Menú</a>
            </div>

            <h2 id="title">Los Nobles</h2>
            <article>
                <!--Formulario-->
                <form action="registrar.php" method="POST" id="contact_form">
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" placeholder="Nombre(s)" name="nombre" id="nombre" required>
                    </div>
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" placeholder="Apellido Paterno" name="apellidoP" id="apellidoP" required>
                    </div>
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" placeholder="Apellido Materno" name="apellidoM" id="apellidoM" required>
                    </div>
                    <div class="email">
                        <label for="email"></label>
                        <input type="email" placeholder="Correo Electronico" name="email" id="email" required>
                    </div>
                    
                    <div class="name">
                        <label for="name"></label>
                        <input type="password" placeholder="Ingrese su contraseña" name="contraseña" id="contraseña" required>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Enviar" id="form_button" />
                    </div>
                </form><!-- // End form -->
                
            
            </article>
            <footer>
                <div class="banner.wrapper">
                    <div class="icon-text-icon">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3732.381617901421!2d-88.21800989629396!3d20.694722522195686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1619796422926!5m2!1sen!2smx" width="400" height="300" style="border:50;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="icon-text-text">
                        <ul class="social">
                            <li>
                                <a href="mailto: marco.wanmartinez@itsva.edu.mx" id="email" target="_blank">
                                    <img src="img\iconocartanegro.jpeg" alt="email" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/Frapp%C3%A9s-Los-Nobles-101416691697208" id="facebook" target="_blank">
                                    <img src="img\iconofacebooknegro.jpeg" alt="facebook" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>

            <footer class="second-footer">
                <p>
                    &copy; <a href="https://github.com/Oscar-Aguilar-Camara" target="_blank">Oscar David Aguilar
                        Camara</a>
                </p>
                <p>
                    &copy; <a href="https://github.com/AlondraCarrillo" target="_blank">Alondra Jacquelin Carrillo
                        Espadas</a>
                </p>
                <p>
                    &copy; <a href="https://github.com/MarcoWan213" target="_blank">Marco Mauricio Wan Martinez</a>
                </p>
            </footer>
        </div>
    </main>
    </div>

    <script src="carrusel_img.js"></script>

</body>

</html>