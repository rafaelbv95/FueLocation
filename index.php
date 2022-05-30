        <?php
        require_once('templates/head.php')
        ?>

        <body>
            <div class="container-fluid position-relative bg-white d-flex p-0">
                <!-- Spinner Start -->
                <?php
                require_once('templates/spinner.php')
                ?>

                <!-- Spinner End -->


                <!-- Sidebar Start -->
                <?php
                require_once('templates/sidebar.php')
                ?>

                <!-- Sidebar End -->


                <!-- Content Start -->
                <div class="content">
                    <!-- Navbar Start -->
                    <?php
                    require_once('templates/navbar.php')
                    ?>
                    <!-- Navbar End -->
                    <div class="container text-center">

                        <h1 class="text-gradient FueLocation mt-5">FueLocation</h1>
                        <br> <br>
                        <h2 class="mb-5">Es una aplicación web que se encarga de obtener los precios actualizados de las gasolineras españolas </h2>
                        <p class="text-muted">
                            Desarrollada por:
                        <ul class="list-unstyled text-muted ">
                            <li><a href="https://github.com/rafaelbv95" class="git">Rafael Bermudo Villaécija</a></li>
                        </ul>
                        </p>
                    </div>
                    <!-- /Intro-->
                    <div class="container text-center mt-5">

                        <h3 class="text-center mb-5">Tecnologías</h3>
                        <div class="row align-self-center, justify-content-center">
                            <div class="col-md-3 col-sm-6 ">
                                <div class="h-caption">
                                    <h4><i class="fas fa-server"></i> API Datos Gob</h4>
                                </div>
                                <div class="h-body text-center">
                                    <p>Es un mecanismo que permite consultar la base de datos semántica de datos.gob.es.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 ">
                                <div class="h-caption">
                                    <h4><i class="fab fa-js"></i> AJAX</h4>
                                </div>
                                <div class="h-body text-center">
                                    <p>Es una técnica de desarrollo web que, al combinar una serie de tecnologías independientes, nos permite intercambiar información entre el servidor y el cliente (un navegador web) de forma asíncrona
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="h-caption">
                                    <h4><i class="fab fa-bootstrap"></i> Bootstrap</h4>
                                </div>
                                <div class="h-body text-center">
                                    <p>Bootstrap es un framework front-end utilizado para desarrollar aplicaciones web y sitios mobile first, o sea, con un layout que se adapta a la pantalla del dispositivo utilizado por el usuario</p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Footer Start -->
                    <?php
                    require_once('templates/footer.php')
                    ?>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <?php
                require_once('templates/backTop.php')
                ?>
            </div>

            <?php
            require_once('templates/includeJsScript.php')
            ?>



        </body>

        </html>