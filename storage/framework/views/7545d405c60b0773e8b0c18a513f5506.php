

<?php $__env->startSection('content'); ?>

<img style="max-width: 150px; max-height: 150px" src="<?php echo e(Storage::url('img/'.$menu->food_pic)); ?>" alt="Food Image">
<h1><?php echo e($menu->food_name); ?></h1>
<h1>RM <?php echo e($menu->food_price); ?></h1>

<form method="POST" action="/<?php echo e($area); ?>/<?php echo e($menu->restaurant_id); ?>/cart/store">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="menu_id" value="<?php echo e($menu->menu_id); ?>">
    <input type="hidden" name="food_name" value="<?php echo e($menu->food_name); ?>">
    <input type="hidden" name="price" value="<?php echo e($menu->food_price); ?>">
    <input type="submit" value="Add to cart">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/menu.blade.php ENDPATH**/ ?>