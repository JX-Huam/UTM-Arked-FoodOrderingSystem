











<?php $__env->startSection('content'); ?>

<div style="max-width: 800px; margin: 0 auto; text-align: center;">
    <br>

    <h2 style="color: #333; margin-bottom: 20px;"><?php echo e($restaurant->restaurant); ?></h2>

    <h5>Menu</h5>

    <form method="POST" action="/<?php echo e($restaurant->area_name); ?>/<?php echo e($restaurant->id); ?>/cart">
        <div style="max-width: 800px; margin: 20px auto; text-align: left; display: flex; flex-wrap: wrap; justify-content: space-between;">
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="width: calc(33.33% - 10px); margin-bottom: 20px; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                    <a href='/<?php echo e($restaurant->area_name); ?>/<?php echo e($single->restaurant_id); ?>/<?php echo e($single->menu_id); ?>' style="text-decoration: none; color: inherit; display: block; height: 100%;">
                        <img style="width: 100%; height: 150px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;" src="<?php echo e(Storage::url('img/'.$single->food_pic)); ?>" alt="Food Image">
                        <div style="padding: 20px;">
                            <h4 style="margin-bottom: 10px; color: #333; font-weight: bold;"><?php echo e($single->food_name); ?></h4>
                            <p style="margin-bottom: 10px; color: #555; font-size: 0.9em;"><?php echo e($single->description); ?></p>
                            <p style="color: #800000; font-size: 1.2em; margin: 0; font-weight: bold;">RM <?php echo e($single->food_price); ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </form>

    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <a href="/<?php echo e($area); ?>" style="text-decoration: none; color: inherit;">
            <button style="height: 50px; width: 150px; background-color: #333; color: #fff; border: none; border-radius: 50px; cursor: pointer; transition: background-color 0.3s;">
                Back
            </button>
        </a>
        <form action="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>/cart" style="text-align: center;">
            <input type="submit" value="View Cart" style="height: 50px; width: 150px; background-color: #800000; color: #fff; border: none; border-radius: 50px; cursor: pointer; transition: background-color 0.3s;">
        </form>
    </div>

</div>

<style>
    /* Add this style for hover effect */
    div[style*="transition: transform"] {
        overflow: hidden;
    }

    div[style*="transition: transform"]:hover {
        transform: scale(1.05);
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/restaurant.blade.php ENDPATH**/ ?>