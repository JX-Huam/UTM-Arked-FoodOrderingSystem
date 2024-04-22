


























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

<div style="text-align: center;">
    <br>
    <br>

    <h2 style="color: #333;">Cart</h2>

    <?php if(count($foods) > 0): ?>
        <table style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; text-align: left;">
            <thead>
                <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 7px;"><h5><b>Item:   </b><?php echo e($single->food_name); ?></h5></td>
                        <td style="padding: 7px;"><h5 style="padding-left: 150px;"><b>Price:   </b>   RM <?php echo e($single->price); ?></h5></td>
                        <td style="padding: 5px;">
                            <form method="POST" action="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>/cart/delete" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="menu_id" value="<?php echo e($single->menu_id); ?>">
                                <button type="submit" style="background-color: #dc3545; color: #fff; padding: 3px 15px; border: none; border-radius: 50px; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </thead>
        </table>
        <br>
        <h3 style="color: #800000; margin: 20px 0;"><b>Total price:  </b> RM <?php echo e($total_price); ?></h3>
        <br>
    <?php else: ?>
        <p>No items added to the cart.</p>
    <?php endif; ?>

    <a href="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>" style="text-decoration: none;">
        <button style="background-color: #555; color: #fff; padding: 5px 25px; border: none; border-radius: 50px; cursor: pointer;">Back</button>
    </a>

    <br><br>

    <?php if(count($foods) > 0): ?>
        <form method="POST" action="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>/cart/payment" style="margin-top: 20px;">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="food_name" value="<?php echo e($order_foods); ?>">
            <input type="hidden" name="total_price" value="<?php echo e($total_price); ?>">
            <input type="submit" value="Proceed to Pay" style="background-color: green; color: #fff; padding: 10px 15px; border: none; border-radius: 50px; cursor: pointer;">
        </form>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/cart.blade.php ENDPATH**/ ?>