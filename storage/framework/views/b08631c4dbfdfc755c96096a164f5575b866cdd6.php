<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>Inquiry</title>
    
    <!-- Include necessary CSS files -->
    <?php echo $__env->make('inc.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('path/to/font-awesome/css/font-awesome.min.css')); ?>">
    
    <!-- Data table css -->
    <link href="<?php echo e(asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css')); ?>" rel="stylesheet" />
</head>
<body class="app sidebar-mini">
    <!-- Include Switcher -->
    <?php echo $__env->make('inc.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="<?php echo e(asset('assets/images/svgs/loader.svg')); ?>" class="loader-img" alt="Loader">
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

                    <!-- Page header -->
                    <!-- End Page header -->

                    <div class="container">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form action="<?php echo e(route('enquiry.store')); ?>" method="post" id="email-form">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-6">
                                        <div class="response"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Full Name *">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 offset-lg-3 offset-md-3">
                                        <div class="row">
                                            <div class="form-group col-lg-6 col-md-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address *">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6">
                                                <input type="text" name="phone" class="form-control" placeholder="Your Phone ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                                        <div class="select-dropdown">
                                            <select name="type" class="form-control">
                                                <option disabled="" selected="" style="display:none;">Treatment</option>
                                                <option>Cataract</option>
                                                <option>Glaucoma</option>
                                                <!--<option>Revision Hip &amp; Knee Surgery</option>-->
                                                <option>Medical Retina</option>
                                                <option>Eye Checkup</option>
                                                <option>Squint</option>
                                                <option>Paediatric Ophthalmology</option>
                                                <option>Uveitis</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                                        <div class="form-group">
                                            <textarea name="contact_message" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 text-center pt-3">
                                        <button class="theme-btn btn-style-one" type="submit" id="submit" name="submit-form">
                                            <span class="btn-title">Submit</span>
                                            <span></span> <span></span> <span></span> <span></span> <span></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->

    <!-- Include Footer -->
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Footer -->

    <!-- JavaScript -->
    <?php echo $__env->make('inc.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\adminpanel\resources\views/index/user.blade.php ENDPATH**/ ?>