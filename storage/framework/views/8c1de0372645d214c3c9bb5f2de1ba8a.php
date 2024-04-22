

<?php $__env->startSection('content'); ?>

<?php
    $order_foods = '';
    $lastIndex = count($foods) - 1;
    foreach ($foods as $index => $value) {
        $order_foods .= $value->menu_id;
        if ($index != $lastIndex) {
            $order_foods .= ', ';
        }
    }

    $total_price = 0;
    foreach ($foods as $index => $value) {
        $total_price += $value->price;
    }
?>

<h2>Cart</h2>

<table class="tg">
    <thead>
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><h3>Food name: <?php echo e($single->food_name); ?></h3></td>
            <td><h3 style="padding-left: 30px;">Price: RM <?php echo e($single->price); ?></h3></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
</table>



<h2>Total price: RM <?php echo e($total_price); ?></h2>

<a href="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>">
    <button>Back to restaurant page</button>
</a>

<br><br>

<form method="POST" action="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>/cart/payment">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="food_name" value="<?php echo e($order_foods); ?>">
    <input type="hidden" name="total_price" value="<?php echo e($total_price); ?>">
    <input type="submit" value="Get to pay">
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/cart.blade.php ENDPATH**/ ?>