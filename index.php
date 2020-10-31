<?php include ("include\header.php"); ?>
    <body id="page-top">
        <!-- Profile picture-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <img class="masthead-avatar mb-5" src="assets/img/profile.jpg" alt="" />
                <h1 class="masthead-heading text-uppercase mb-0">Priscilla Betuyaku</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Above Information-->
                <p class="masthead-subheading font-weight-light mb-0"> Bsc in IT | 2nd Year</br> CCT College · Student Number: 2019217</p>
            </div>
        </header>
        <!-- Country Table Section-->
        <section class="page-section country" id="countable">
            <div class="container">
                <!-- Countries Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase mb-0">Table Country</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
            <!-- Select Country Table-->
            <?php include ("include/tablearray.php"); ?>    
        </section>
        <!-- Choose Section-->
        <section class="page-section bg-primary text-white mb-0" id="choosetable">
            <!-- Choose Section Content-->
            <div class="row">
                <?php include ("include/choosetable.php");?>
            </div>
        </section>
         <!-- Footer-->
        <?php include ("include/footer.php");?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
