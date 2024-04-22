



 

<?php $__env->startSection('content'); ?>

<div style="max-width: 800px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between;">

    <br>
    <h2 style="color: #333; text-align: center; width: 100%;"><?php echo e($area); ?></h2>

    <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href='/<?php echo e($single->area_name); ?>/<?php echo e($single->id); ?>' style="text-decoration: none; color: inherit; width: calc(33.33% - 20px);">
            <div style="flex-basis: 100%; background-color: #fff; border: 1px solid #ddd; margin-bottom: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                <img style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" src="<?php echo e(Storage::url('img/'.$single->restaurant_pic)); ?>" alt="Restaurant Image">
                <div style="padding: 20px; text-align: center;">
                    <h2 style="margin-bottom: 10px; color: #800000; font-weight: bold;"><?php echo e($single->restaurant); ?></h2>
                    <!-- Add additional information if needed -->
                </div>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div style="width: 100%; text-align: center; margin-top: 20px;">
        <a href="<?php echo e(url()->previous()); ?>" style="text-decoration: none; color: inherit;">
            <button style="height: 50px; width: 100px; background-color: #333; color: #fff; border: none; border-radius: 50px; cursor: pointer; transition: background-color 0.3s;">
                Back
            </button>
        </a>

       

    </div>


    <div> <a href="<?php echo e(url('/')); ?>" class="btn btn-secondary mb-3">Home</a></div>
    

    
</div>

<style>
    div[style*="transition: transform"] {
        overflow: hidden;
    }

    div[style*="transition: transform"]:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/area.blade.php ENDPATH**/ ?>