








<?php $__env->startSection('content'); ?>

<div style="max-width: 800px; margin: 0 auto;">

    <h1 style="color: #333; text-align: center; margin-bottom: 20px;">Explore Areas</h1>

    <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/<?php echo e($single->area_name); ?>" style="text-decoration: none; color: inherit;">
            <div style="background-color: #f8f9fa; border: 1px solid #ced4da; margin: 10px 0; padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                <div style="padding: 10px;">
                    <h2 style="font-size: 1.5em; margin: 0;"><?php echo e($single->area_name); ?></h2>
                </div>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<style>
    /* Add this style for hover effect */
    a:hover > div {
        transform: scale(1.05);
    }
</style>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/areas.blade.php ENDPATH**/ ?>