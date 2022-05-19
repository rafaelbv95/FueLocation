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
            <div class="container pt-5 pb-5">
                <div class="row">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 mt-5 mb-5 text-center"> 
                                    <h2>Formulario de contacto</h2>
                                </div>
                                <div class="col-sm-4 ">
                                    <input class="form-control" type="text"  placeholder="Nombre">
                                </div>
                                <div class="col-sm-4 ">
                                    <input class="form-control" type="text"  placeholder="Email">
                                </div>
                                <div class="col-sm-4 ">
                                    <input class="form-control" type="text"placeholder="Teléfono">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <textarea placeholder="Escribe el mensaje aquí..." class="form-control"  rows="9"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-5">
                                <div class="col-sm-6">
                                    <label class="checkbox"><input type="checkbox"> Regístrese para recibir el boletín</label>
                                </div>
                                <div class="col-sm-6 text-right mt-5 mb-5">
                                    <input class="btn  btn-primary" type="submit" value="Enviar mensaje">
                                </div>
                            </div>
                        </form>

                   
                </div>
            </div> <!-- /container -->

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