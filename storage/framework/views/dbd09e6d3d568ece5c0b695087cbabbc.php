

<?php $__env->startSection('content'); ?>

<h2><?php echo e($restaurant->restaurant); ?></h2>

<form method="POST" action="/<?php echo e($restaurant->area_name); ?>/<?php echo e($restaurant->id); ?>/cart">
<table class="tg">
    <thead>
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><img style="max-width: 150px; max-height: 150px" src="<?php echo e(Storage::url('img/'.$single->food_pic)); ?>" alt="Food Image"></td>
            <td><h2><?php echo e($single->food_name); ?></a></h2></td>
            <td><h2>RM: <?php echo e($single->food_price); ?></h2></td>
            <td><button><a href='/<?php echo e($restaurant->area_name); ?>/<?php echo e($single->restaurant_id); ?>/<?php echo e($single->menu_id); ?>'>Add to cart</a></button></h2></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
</table>
</form>
<br>
<br>
<form action="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>/cart">
    <input type="submit" value="Cart" style="height:50px; width:100px"/>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/restaurant.blade.php ENDPATH**/ ?>