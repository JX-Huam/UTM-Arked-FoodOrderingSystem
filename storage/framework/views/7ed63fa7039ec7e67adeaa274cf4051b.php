

<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

<?php $__env->startSection('container'); ?>

<h1>View Sales</h1>
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->created_date); ?></td>
                        <td><?php echo e($item->created_time); ?></td>
                        <td><?php echo e($item->menu_id); ?></td>
                        <td>RM. <?php echo e(number_format($item->total_price, 0, ",", ".")); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <a href="<?php echo e(url('/owner-home')); ?>" class="btn btn-secondary mb-3">Back to Homepage</a>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/view_sales.blade.php ENDPATH**/ ?>