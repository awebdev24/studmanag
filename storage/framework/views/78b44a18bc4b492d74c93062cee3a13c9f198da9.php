<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    
    <!-- Title -->
    <title>Inquiry</title>

    <!-- Include CSS files -->
    <?php echo $__env->make('inc.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('path/to/font-awesome/css/font-awesome.min.css')); ?>">
</head>
<body class="app sidebar-mini">

    <!-- Include Switcher -->
    <?php echo $__env->make('inc.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    
                    <!-- Include app header -->
                    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- /app header -->

                    <!-- Page header -->
                    
                    <!-- End Page header -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            <?php if(session('status')): ?>
                                <?php echo e(session('status')); ?>

                            <?php endif; ?>

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title col-2">APPOINTMENTS</div>
                                </div>
                                <?php
                                    $result = \DB::table('ratings')->get();
                                    $counter = 1;
                                ?>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap" id="example">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">sr.no</th>
                                                    <th class="wd-15p border-bottom-0">Name</th>
                                                    <th class="wd-15p border-bottom-0">Rating</th>
                                                    <th class="wd-25p border-bottom-0">Message</th>
                                                    <th class="wd-25p border-bottom-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($counter++); ?></td>
                                                        <td><?php echo e($row->name); ?></td>
                                                        <td><?php echo e($row->rate); ?></td>
                                                        <td><?php echo e($row->message); ?></td>
                                                      <td>
                                                        <!-- Delete button -->
                                                        <form action="<?php echo e(route('review.delete', $row->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                    
                </div>
            </div>
            
        </div>

        <!-- Include Footer -->
        <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Footer -->
        
    </div>
    <!-- End Page -->

    <!-- Include JavaScript -->
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
<?php /**PATH C:\xampp\htdocs\adminpanel\resources\views/index/review.blade.php ENDPATH**/ ?>