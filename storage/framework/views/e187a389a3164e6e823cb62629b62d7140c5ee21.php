<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="row text-center">
                        <div class="col-sm-4">
                        <a href="/management">
                        <img src="<?php echo e(asset('image/management.png')); ?>" height="100" width="100">
                        Management</a>
                        </div>
                        <div class="col-sm-4">
                        <a href="/Cashier">
                        <img src="<?php echo e(asset('image/cashier.png')); ?>" height="100" width="100">
                        
                        Cashier</a>
                        </div>
                        <div class="col-sm-4">
                        <a href="/report">  <img src="<?php echo e(asset('image/report.png')); ?>" height="100" width="100">
                        Report</a>
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_project\resources\views/home.blade.php ENDPATH**/ ?>