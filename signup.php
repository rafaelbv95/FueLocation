        <?php
        require_once('templates/head.php')
        ?>

        <body>
            <div class="container-xxl position-relative bg-white d-flex p-0">
                <!-- Spinner Start -->
                <?php
                // require_once('templates/spinner.php')
                ?>
                <!-- Spinner End -->

                <div id="usuarioInsertado">

                </div>
                <!-- Sign Up Start -->
                <div class="container-fluid">
                    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5">
                            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <a href="index.php" class="">
                                        <h3 class="text-primary"><img class=" me-lg-2" src="img/fuel.png" alt="" style="width: 30px; height: 30px;"></i> FueLocation</h3>
                                    </a>
                                    <h3>Registro</h3>
                                </div>
                                <form role="form" id="register-form" method="POST">
                                    <div class="form-floating form-group mb-3">
                                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
                                        <label for="usuario">Nombre usuario</label>
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="form-floating  form-group mb-3">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan">
                                        <label for="nombre">Nombre</label>
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="form-floating form-group mb-3">
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="name@example.com">
                                        <label for="apellidos">Apellidos</label>
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="form-floating form-group mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                        <label for="email">Correo</label>
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="form-floating form-group mb-3">
                                        <input type="password" class="form-control" id="contrasenya1" name="contrasenya1" placeholder="Password">
                                        <label for="contrasenya1">Contraseña</label>
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="form-floating form-group mb-4">
                                        <input type="password" class="form-control" id="contrasenya2" name="contrasenya2" placeholder="Password">
                                        <label for="floatingPassword">Repetir Contraseña</label>
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check form-group">
                                            <input type="checkbox" class="form-check-input" name="check" id="check">
                                            <label class="form-check-label" for="check">Términos y condiciones</label>
                                            <span class="help-block" id="error"></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="Enviar">Registrarse</button>
                                    <p class="text-center mb-0">¿Ya tienes una cuenta? <a href="signin.php">Iniciar Sesión</a></p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Sign Up End -->
            </div>



            <!-- JavaScript Libraries -->
            <?php
            require_once('CRUDUser.php');
            if (isset($_POST["Enviar"])) {


                insertar();
            }
            require_once('templates/includeJsScript.php')
            ?>

            <script src="js/users.js"></script>
        </body>

        </html>