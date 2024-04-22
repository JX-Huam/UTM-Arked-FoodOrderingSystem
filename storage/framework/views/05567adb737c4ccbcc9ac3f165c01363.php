

<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

<?php $__env->startSection('container'); ?>


<h1>Restaurant</h1>
<br>
<br>


<h5 class="toprated">Menu</h5>
<br>

<?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

<div class="item-box">
    
    <img src="<?php echo e(asset('assets/img/'. $food->food_pic)); ?>">

    <div class="item-details">
        <h3><?php echo e($food->food_name); ?></h3>
        <p>RM. <?php echo e($food->food_price); ?></p>
        <p><b>Description: </b><?php echo e($food->description); ?></p>
        
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php echo $__env->make('layouts.ownermain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/home.blade.php ENDPATH**/ ?>