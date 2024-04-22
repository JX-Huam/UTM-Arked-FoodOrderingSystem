

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Your Orders</h2>

        <?php if($orders && count($orders) > 0): ?>
            <ul>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($order->order_details); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php else: ?>
            <p>No orders found.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/orders/view.blade.php ENDPATH**/ ?>