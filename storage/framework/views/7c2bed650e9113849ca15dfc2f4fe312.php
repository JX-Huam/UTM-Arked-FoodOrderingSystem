












 



















<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <br>
    <div class="card" style="max-width: 400px; margin: 0 auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff;">

        <div style="text-align: center; background-color: #f8f9fa; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <img class="card-img-top" style="width: 100%; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" src="<?php echo e(Storage::url('img/'.$menu->food_pic)); ?>" alt="Food Image">
        </div>

        <div class="card-body" style="padding: 20px;">
            <h4 class="card-title" style="color: #333; margin-top: 15px; font-size: 1.5em; font-weight: bold;"><?php echo e($menu->food_name); ?></h4>

            <p class="card-text" style="color: #555; margin-bottom: 15px; font-size: 1em;"><?php echo e($menu->description); ?></p>

            <h5 class="card-text" style="color: #800000; font-weight: bold; font-size: 1.2em;">RM <?php echo e($menu->food_price); ?></h5>

            <form method="POST" action="/<?php echo e($area); ?>/<?php echo e($menu->restaurant_id); ?>/cart/store" style="margin-top: 20px;">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="menu_id" value="<?php echo e($menu->menu_id); ?>">
                <input type="hidden" name="food_name" value="<?php echo e($menu->food_name); ?>">
                <input type="hidden" name="description" value="<?php echo e($menu->description); ?>">
                <input type="hidden" name="price" value="<?php echo e($menu->food_price); ?>">
                <button type="submit" class="btn btn-primary mx-auto d-block" style="height: 30%; width: 35%; border-radius: 35px; cursor: pointer; background-color: #800000; border: none;">Add to Cart</button>

            </form>
        </div>
    </div>

    <div class="text-center mt-3">
        <br>
        <br>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary" style="width:8%; background-color: #333; color: #fff; border: none; border-radius: 35px; cursor: pointer; padding: 10px 20px; text-decoration: none;">Back</a>
    </div>
</div>

<style>
    /* Style for the back button */
    a.btn-secondary:hover {
        background-color: #555;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/menu.blade.php ENDPATH**/ ?>