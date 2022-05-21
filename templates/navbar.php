<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                <img class=" me-lg-2" src="img/fuel.png" alt="" style="width: 30px; height: 30px;">
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" id="buscar" type="text" placeholder="Búsqueda">
                </form>
                <?php
                	if (isset($_SESSION['usuario'])) {
                ?>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['usuario'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="#" class="dropdown-item">Ajustes</a>
                            <a href="logout.php" class="dropdown-item">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
                <?php
                    }else {
                ?>  
                <div class="navbar-nav align-items-center ms-auto mb-3 mt-3">
                    <div class="nav-item dropdown">
                        <a href="signin.php" name="" id="" class="btn btn-primary" href="#" role="button">Iniciar Sesión/Registro </a>
                    </div>
                </div>

                <?php
                    }

                ?>
                
            </nav>