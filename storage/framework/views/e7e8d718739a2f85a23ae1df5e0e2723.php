

<?php $__env->startSection('content'); ?>
    
<h1>Areas</h1>

<?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item-box">
        <div class="item-details">
            <h2><a href="/<?php echo e($single->area_name); ?>"><?php echo e($single->area_name); ?></a></h2>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/areas.blade.php ENDPATH**/ ?>