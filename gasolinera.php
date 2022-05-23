        <?php
                require_once('templates/head.php')
        ?>

<body onload="provincias()">
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

            <?php
            if (isset($_SESSION['usuario'])) {

            ?>
            

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">

                        <div class="square_block " id="square"></div>

                        <div id="map" class="pb-5"></div>
                        <div id="idmap"class="pt-5"></div>
                    </div>

                </div>
            </div>

            <?php
                } else {
            ?>
            <div class="container-fluid pt-4 px-4  text-center mt-5">
            <h2 class="iniciar"> Para poder consultar los datos debes de iniciar sesión</h2>

            </div>

                

            <?php


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

    <!-- Template Javascript -->
     <script src="js/function.js"></script>


             
</body>

</html>