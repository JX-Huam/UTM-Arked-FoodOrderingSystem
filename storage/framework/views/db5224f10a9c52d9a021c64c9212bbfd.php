<!-- In your view_order.blade.php file -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Order Details for Restaurant</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Created Date</th>
                    <th>Created Time</th>
                    <th>Menu ID</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->created_date); ?></td>
                        <td><?php echo e($order->created_time); ?></td>
                        <td><?php echo e($order->menu_id); ?></td>
                        <td><?php echo e($order->total_price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/view_order.blade.php ENDPATH**/ ?>