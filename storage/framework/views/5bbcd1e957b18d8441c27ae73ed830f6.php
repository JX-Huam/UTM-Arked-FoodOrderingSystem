

<?php $__env->startSection('content'); ?>

<h2><?php echo e($area); ?></h2>

<?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="item-box">
    <img style="max-width: 150px; max-height: 150px" src="<?php echo e(Storage::url('img/'.$single->restaurant_pic)); ?>" alt="Restaurant Image">
    <div class="item-details">
        <h2><a href='/<?php echo e($single->area_name); ?>/<?php echo e($single->id); ?>'><?php echo e($single->restaurant); ?></a></h2>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/area.blade.php ENDPATH**/ ?>