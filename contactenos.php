<?php

    $message_sent = false;

    if(isset($_POST['correo']) && $_POST['correo'] != ''){

        if(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
           
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono=$_POST['telefono'];
            $presupuesto = $_POST['presupuesto'];
            $descripcion = $_POST['descripcion'];

            $to = 'erickalejandropm117@gmail.com';
            $subject = "Correo de REFFKIfilms.com";
            $body = "";

            $body .= "De: ".$nombre."\r\n";
            $body .= "Correo: ".$correo."\r\n";
            $body .= "Teléfono: ".$telefono."\r\n";
            $body .= "Presupuesto: ".$presupuesto."\r\n";
            $body .= "Descripción: ".$descripcion."\r\n";

            mail($to, $subject, $body);

            $message_sent = true;
        }
    }

   

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>REFFKI films | Contáctenos</title>
    
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="/contactenos.css">
        <!-- Iconos de Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

         <!--iconos-->
         <link rel="icon" href="/images/icons/favicon-16x16.png">
        <link rel="icon" href="/images/icons/favicon-32x32.png">
        <link rel="icon" href="/images/icons/android-chrome-192x192.png">
        <link rel="apple-touch-icon" href="/images/icons/apple-touch-icon.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    
    </head>

    <body>

        <div class="container-fluid px-2">

            <!-- Barra de navegación -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/index.html">
                        <!-- Logo Reffki -->
                        <img src="images/logo.png" alt="" width="75" height="60">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
    
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link"  href="/index.html">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/narrativa.html">STORYTELLING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/comerciales.html">PUBLICIDAD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/music.html">VIDEOCLIPS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeria.html">GALERÍA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="/nosotros.html">NOSOTROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">CONTÁCTENOS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container my-5"> 
                <h1 id="titulo" class="pt-5">Llevamos tu producto o servicio al siguiente nivel.</h1>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <img id="foto-crew" class="img-responsive" src="/images/crew.jpg" alt="Imagen que no me han pasado hdsptm">
                    </div>
                    <div class="col-md-6 pt-2">
                        <h2>Contacto</h2>
                        <h4 class="fw-normal pt-2"><i class="bi bi-telephone-fill"></i> Telefono: 322-135-0108</h4>
                        <h4 class="fw-normal pt-2"><i class="bi bi-envelope-fill"></i> Correo: reffkifilms@gmail.com</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid bg-dark pt-1 pb-5">
                <div class="container">
                    <div class="row mt-5">

                        <div class="col-md-6">

                        <?php
                         if($message_sent):
                        ?>

                        <h2 class="my-2 text-center">¡Gracias! Nos comunicaremos contigo lo mas pronto posible</h2>

                        <?php
                         else:
                        ?>

                            <h2 class="py-2">Cuentanos sobre tu proyecto</h2>
                            
                            <!--formulario-->
                            <form action="contactenos.php" method="POST" class="pe-5">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                    <label for="floatingInput">Nombre</label>
                                  </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com">
                                    <label for="floatingInput">Correo electronico</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="322 555 5555">
                                    <label for="floatingInput">Teléfono</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <select class="form-select" id="presupuesto" name="presupuesto" aria-label="Floating label select example">
                                      <option selected>$0 - $4,999</option>
                                      <option value="$5,000 - $19,999">$5,000 - $19,999 </option>
                                      <option value="$20,000 - $49,999">$20,000 - $49,999</option>
                                      <option value="$50,000 a $99,999">$50,000 a $99,999</option>
                                      <option value="$100,000 o más">$100,000 o más</option>
                                    </select>
                                    <label for="floatingSelect">Presupuesto</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Describenos tu proyecto" id="descripcion" name="descripcion" style="height: 150px"></textarea>
                                    <label for="floatingTextarea2">Describenos tu proyecto</label>
                                  </div>
  
                                  <p>Al presionar "Enviar" estoy de acuerdo con el Aviso de privacidad</p>

                                  <button id="boton-form" type="submit" class="btn btn-dark px-2"> Enviar </button>

                              </form>
                            <?php
                            endif;
                            ?>
                        </div>

                        <!--Imagen al lado de formulario-->
                        <div class="col-md-6 mt-3">
                            <img id="foto-form" class="img-responsive" src="/images/foto-formulario.jpg" alt="Foto">
                        </div>

                      </div>
                 </div>
            </div>

            <!--Boton de Whatsapp-->
            <a href="https://wa.me/523221350108?text=Hola%20quisiera%20saber%20mas%20información%20de%20REFFKI" id="whatsapp" target="_blank"> 
                <i class="bi bi-whatsapp"></i>
            </a>

            </div>

             <!--footer de la pagina-->
        <footer class="page-footer">
         
            <div class="container text-start text-md-left mt-5">
                <div class="row">

                     <!-- redes sociales -->
                    <div class="col-md-2 mx-auto mb-4">
                        <h5 class="font-weigth-bold text-white">Síguenos</h5>
                        <ul class="list-unstyled">
                            <li class="my-2"><a href="https://www.facebook.com/ReffkiFilms" class="link-light"><i class="bi bi-facebook"></i>Reffki Films</a></li>
                            <li class="my-2"><a href="https://www.instagram.com/reffkifilms" class="link-light"><i class="bi bi-instagram"></i>@reffkifilms</a></li>
                            <li class="my-2"><a href="https://www.youtube.com/user/NanoyAndreVlogs" class="link-light"><i class="bi bi-youtube"></i>REFFKI FILMS</a></li>
                            <li class="my-2"><a href="https://www.flickr.com/photos/191444841@N04/" class="link-light"><img id="flickr" src="/images/flickr.png"> Reffki Films</a></li>
                        </ul>
                    </div>

                     <!-- Enlaces -->
                    <div class="col-md-2 mx-auto mb-4">
                        <h5 class="font-weigth-bold text-white">Enlaces</h5>
                        <ul class="list-unstyled">
                            <li class="my-2"><a href="/index.html" class="link-light">Página principal</a></li>
                            <li class="my-2"><a href="/galeria.html" class="link-light">Galería</a></li>
                            <li class="my-2"><a href="/nosotros.html" class="link-light">Nosotros</a></li>
                            <li class="my-2"><a href="#" class="link-light">Contáctenos</a></li>
                            <li class="my-2"><a href="#" class="link-light">Aviso de privacidad</a></li>
                        </ul>
                    </div>

                     <!-- Info de contacto -->
                    <div class="col-md-3 mx-auto mb-4">
                        <h5 class="font-weigth-bold text-white">Contacto</h5>
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="bi bi-house-door-fill"></i>Río Nilo 170, Fluvial Vallarta, Puerto Vallarta, Jalisco, México</li>
                            <li class="my-2"><i class="bi bi-envelope-fill"></i> reffkifilms@gmail.com</li>
                            <li class="my-2"><i class="bi bi-telephone-fill"></i> 322-135-0108</li>
                        </ul>
                    </div>

                    <!-- Logo Reffki -->
                    <div class="col-md-1 mx-auto py-5">
                        <div class="text-center">
                            <img src="images/logo.png" class="logo-footer" alt="LOGO" width="90" height="70">
                        </div> 
                    </div>


                </div>
            </div>
            <div class="container-fluid text-center pb-2">
                <p>Copyrigth 2021 &copy;REFFKI films. Todos los derechos reservados.</p>
            </div>
        </footer>


        </div>


         <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!--JS de Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--script src="/js/contactenos.js" type="text/javascript"></script-->
    </body>


</html>