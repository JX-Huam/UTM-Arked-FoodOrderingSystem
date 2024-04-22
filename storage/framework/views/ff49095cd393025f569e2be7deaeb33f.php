












 

<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

<?php $__env->startSection('container'); ?>

<div class="container">
    <h1 class="text-center mt-5 mb-4">Restaurant</h1>

    <section class="menu-section">
        <h4 class="toprated">Menu</h4>
        <br>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <img src="<?php echo e(asset('assets/img/' . $food->food_pic)); ?>" class="card-img-top rounded" alt="<?php echo e($food->food_name); ?>">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?php echo e($food->food_name); ?></h5>
                            <p class="card-text text-muted"><b>RM.</b> <?php echo e($food->food_price); ?></p>
                            <p class="card-text"><b>Description:</b> <?php echo e($food->description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
</div>

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        color: #333;
    }

    .menu-section {
        margin-top: 30px;
    }

    .card {
        transition: transform 0.3s ease;
        height: 100%;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        object-fit: cover;
        height: 200px; /* Adjust the height as needed */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .card-text {
        color: #555;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .rounded {
        border-radius: 10px;
    }

    .text-dark {
        color: #333;
    }
</style>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/owner-home.blade.php ENDPATH**/ ?>