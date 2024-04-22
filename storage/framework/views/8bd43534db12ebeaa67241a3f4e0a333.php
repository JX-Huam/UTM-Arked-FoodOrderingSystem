

<?php $__env->startSection('content'); ?>

<h1>Payment</h1>
<h1>Total price: RM <?php echo e($total_price); ?></h1>

<div class="item-box">
    <img src="<?php echo e(Storage::url('img/qrcode.jpg')); ?>" alt="QR code Image">
    
</div>

<a href="">link proceed to e-wallet</a>

<p>Click finish pay after complete the payment</p>
<form method="POST" action="/<?php echo e($area); ?>/<?php echo e($restaurant_id); ?>/cart/payment/store">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="restaurant_id" value="<?php echo e($restaurant_id); ?>">
    <input type="hidden" name="menu_id" value="<?php echo e($food_name); ?>">
    <input type="hidden" name="total_price" value="<?php echo e($total_price); ?>">
    <input type="submit" value="Finish pay" onclick="myFunction()">
</form>

<a href="/<?php echo e($area); ?>/<?php echo e($restaurant_id); ?>">
    <button>Back to restaurant page</button>
</a>

<script>
    function myFunction() {
        alert("Pay Succesful!");
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/payment.blade.php ENDPATH**/ ?>