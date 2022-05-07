        <?php
                require_once('templates/head.php')
        ?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <?php
                require_once('templates/spinner.php')
        ?>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-5">
                    <div class="bg-light rounded p-4 p-sm-6 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><img class=" me-lg-2" src="img/fuel.png" alt="" style="width: 30px; height: 30px;"></i> FueLocation</h3>
                            </a>
                            <h3>Inicia sesión</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Correo</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            <a href="">Olvidé mi contraseña</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Iniciar sesión</button>
                        <p class="text-center mb-0">¿No tienes una cuenta? <a href="">Registro</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
        <?php
            require_once('templates/includeJsScript.php')
        ?>
</body>

</html>