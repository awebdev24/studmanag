<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Admin</title>
    <!--Favicon -->
    <?php echo $__env->make('inc.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="app sidebar-mini">

    <!-- Switcher -->
    <?php echo $__env->make('inc.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Switcher -->
            
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="https://php.spruko.com/azea/azea/assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- Page -->
    <div class="page">
        <div class="page-main">
            <!-- Include sidebar -->
            <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /aside -->
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <!-- Include app header -->
                    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- /app header -->
                    <!--Page header-->
                    <!--End Page header-->
                    <!--Row-->
                </div>
            </div>
            <!-- End app-content-->
            <!-- Include Footer -->
            <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End Footer -->
        </div>
    </div>

    <!-- End Page -->
    <?php echo $__env->make('inc.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Back to top -->
</body>                              
</html>
<?php /**PATH C:\xampp\htdocs\adminpanel\resources\views/dashboard.blade.php ENDPATH**/ ?>