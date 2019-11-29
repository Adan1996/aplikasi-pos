<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POS App | <?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/font-awesome/css/font-awesome.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page">

        <!-- Page Wrapper -->
        <div id="wrapper">



            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column mt-5">

                <!-- Main Content -->
                <div id="content">

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- 404 Error Text -->
                        <div class="text-center">
                            <div class="error mx-auto" data-text="404">404</div>
                            <p class="lead text-gray-800 mb-5">Access Forbidden</p>
                            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                            <a href="<?= base_url('user'); ?>">&larr; Back to Dashboard</a>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- JavaScript files-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/popper.js/umd/popper.min.js"> </script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/font-awesome/js/all.js"></script>
        <script src="<?= base_url('assets/'); ?>js/charts-home.js"></script>
        <!-- Main File-->
        <script src="<?= base_url('assets/'); ?>js/front.js"></script>
</body>

</html>