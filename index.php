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