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
                    <div class="container">
    <div class="main-body">
    <?php
        if (isset($_SESSION['usuario'])) {
            
        ?>
          <div class="row gutters-sm mt-5">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/user.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['usuario'] ?></h4>
                      <p class="text-secondary mb-1"><?php echo $_SESSION['rol'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['nombre'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Apellidos</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['apellidos'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['email'] ?>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>

        <?php
        }else {
            header("Location:index.php");
        }
        ?>

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