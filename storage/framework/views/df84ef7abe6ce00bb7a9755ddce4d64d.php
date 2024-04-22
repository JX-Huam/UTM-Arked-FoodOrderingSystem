

<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-3">


<h2><?php echo e($restaurant->restaurant); ?></h2>




<br>
<br>


<div class="row mb-4">
    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3" style="height: inherit;">
            <div class="card shadow border-0" style="height: inherit;">
                <div class="card-body">
                    <img src="<?php echo e(asset('assets/img/'. $food->food_pic)); ?>" class="img-fluid">

                    <div class="item-details">
                        <h3><?php echo e($food->food_name); ?></h3>
                        <p>RM. <?php echo e($food->food_price); ?></p>
                        <p><b>Description: </b><?php echo e($food->description); ?></p>
                        <a class="btn btn-sm btn-primary" href='/<?php echo e($restaurant->area_name); ?>/<?php echo e($food->restaurant_id); ?>/<?php echo e($food->menu_id); ?>'>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<form action="/<?php echo e($area); ?>/<?php echo e($restaurant->id); ?>/cart">
    <input type="submit" class="btn btn-warning" value="Cart" style="height:50px; width:100px"/>
</form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/restaurant.blade.php ENDPATH**/ ?>