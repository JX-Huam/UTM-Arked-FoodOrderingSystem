

<?php $__env->startSection('container'); ?>
<h1>ABOUT PAGE</h1>
<h3><?php echo e($name); ?></h3>
<p><?php echo e($email); ?></p>
<img src="images/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="500" class="img-thumbnail rounded-circle">
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/about.blade.php ENDPATH**/ ?>