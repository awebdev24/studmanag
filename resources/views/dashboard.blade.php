<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Admin</title>
    <!--Favicon -->
    @include('inc.link')
</head>
<body class="app sidebar-mini">

    <!-- Switcher -->
    @include('inc.setting')
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
            @include('inc.sidebar')
            <!-- /aside -->
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <!-- Include app header -->
                    @include('inc.header')
                    <!-- /app header -->
                    <!--Page header-->
                    <!--End Page header-->
                    <!--Row-->
                </div>
            </div>
            <!-- End app-content-->
            <!-- Include Footer -->
            @include('inc.footer')
            <!-- End Footer -->
        </div>
    </div>

    <!-- End Page -->
    @include('inc.script')
    <!-- Back to top -->
</body>                              
</html>
