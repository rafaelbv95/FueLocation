        <?php
                require_once('CRUDUser.php');
                require_once('templates/head.php')
        ?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <?php
           
            $error = null;
            if (isset($_POST['Enviar'])) {
                login();
            }
                require_once('templates/spinner.php')

        ?>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-5">
                            <?php
							if (isset($_SESSION['usuario'])) {
								header("Location:index.php");
								exit;
							} else {
								if ($error) {
									echo "<p style='text-align: center; color: red'>" . $error . "</p>";
								}
							?>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <div class="bg-light rounded p-4 p-sm-6 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.php" class="">
                                    <h3 class="text-primary"><img class=" me-lg-2" src="img/fuel.png" alt="" style="width: 30px; height: 30px;"></i> FueLocation</h3>
                                </a>
                                <h3>Inicia sesión</h3>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="usuario">
                                <label for="floatingInput">Usuario</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                
                                <a href="">Olvidé mi contraseña</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="Enviar">Iniciar sesión</button>
                            <p class="text-center mb-0">¿No tienes una cuenta? <a href="signup.php">Registro</a></p>
                        </div>
                    </from>
                    <?php
							}
					?>
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