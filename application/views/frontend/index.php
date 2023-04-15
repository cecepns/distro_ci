<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEPI STORE</title>

    <!-- STYLING BOOTSTRAP -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap5/css/bootstrap.min.css">

    <!-- STYLING CUSTOM -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

</head>

<body>
    <script src="<?php echo base_url() ?>assets/back/js/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/isotope.js"></script>

    <main class="home-pages">

        <!-- WRAPPER UNTUK MAIN CONTENT -->
        <?php $this->load->view('frontend/layout/sidebar.php') ?>
        <!-- WRAPPER UNTUK MAIN CONTENT -->

        <div class="main-content">
            <div class="container">

                <!-- WRAPPER MENU HEADER -->
                <?php $this->load->view('frontend/layout/header.php') ?>
                <!-- END WRAPPER MENU HEADER -->

                <!-- WRAPPER HERO BANNER -->
                <?php $this->load->view('frontend/layout/hero-banner.php') ?>
                <!-- END WRAPPER HERO BANNER -->

                <?php include $page;?>

                <!-- WRAPPER UNTUK FOOTER -->
                <?php $this->load->view('frontend/layout/footer.php') ?>
                <!-- END WRAPPER UNTUK FOOTER -->

            </div>
         </div>

    </main>

    <script src="<?php echo base_url() ?>assets/vendor/bootstrap5/js/bootstrap.min.js"></script>
</body>

</html>