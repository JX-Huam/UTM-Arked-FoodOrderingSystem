







<?php $__env->startSection('content'); ?>

<div style="text-align: center; max-width: 600px; margin: 0 auto; padding: 20px;">

    <h1 style="color: #333; margin-bottom: 20px;">Payment</h1>

    <h1 style="color: #007bff; font-size: 1.5em; margin-bottom: 30px;">Total price: RM <?php echo e($total_price); ?></h1>

    <div class="item-box" style="margin-bottom: 20px;">
        <img style="max-width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" src="<?php echo e(Storage::url('img/qrcode.jpg')); ?>" alt="QR code Image">
    </div>

    <a href="#" style="color: #007bff; text-decoration: none; display: block; margin-bottom: 10px;">Proceed to E-wallet</a>

    <p style="margin-bottom: 20px;">Click "Finish Pay" after completing the payment</p>

    <form method="POST" action="/<?php echo e($area); ?>/<?php echo e($restaurant_id); ?>/cart/payment/store" style="margin-bottom: 20px;">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="restaurant_id" value="<?php echo e($restaurant_id); ?>">
        <input type="hidden" name="menu_id" value="<?php echo e($food_name); ?>">
        <input type="hidden" name="total_price" value="<?php echo e($total_price); ?>">
        <input type="submit" value="Finish Pay" style="background-color: #008000; color: #fff; padding: 12px 20px; border: none; border-radius: 50px; cursor: pointer;" onclick="myFunction()">
    </form>

    <a href="/<?php echo e($area); ?>/<?php echo e($restaurant_id); ?>" style="text-decoration: none; display: inline-block; margin-bottom: 10px;">
        <button style="background-color: #555; color: #fff; padding: 8px 20px; border: none; border-radius: 50px; cursor: pointer;">Back to Restaurant Page</button>
    </a>

</div>

<script>
    function myFunction() {
        alert("Payment Successful!");
    }
</script>

<style>
    body {
        background-color: #f8f9fa;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/payment.blade.php ENDPATH**/ ?>