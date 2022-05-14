<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>


<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class=" me-lg-2" src="img/fuel.png" alt="" style="width: 40px; height: 40px;"></i>FueLocation</h3>
                </a>
                <?php
                	if (isset($_SESSION['usuario'])) {
                    ?>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['usuario'] ?></h6>
                        <span><?php echo $_SESSION['rol'] ?></span>
                    </div>
                </div>
                <?php
                    }
                ?>  
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link <?= ($activePage == 'index') ? 'active' : ''; ?> "><i class="far fa-file-alt me-2"></i>Inicio</a>
                    <a href="gasolinera.php" class="nav-item nav-link <?= ($activePage == 'gasolinera') ? 'active' : ''; ?>"><i class="fa fa-th me-2"></i>Gasolineras</a>
                    <a href="contact.php" class="nav-item nav-link <?= ($activePage == 'contact') ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i>Contáctanos</a>
                   
                </div>
                
            </nav>
        </div>