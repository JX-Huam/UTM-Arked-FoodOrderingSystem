
<?php $__env->startSection('content'); ?>
    <style>
        .btn-orange {
            color: #fff;
            background-color: orange;
            border: 1px solid orange;
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn-orange:hover {
            background-color: darkorange;
            border: 1px solid darkorange;
        }
    </style>

    <main>
        <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
        </div>

        <div class="ms-auto me-auto mt-5" style="width: 500px;">
            <p>We will send a link to your email, use that link to reset your password.</p>

            <form action="<?php echo e(route('forget.password.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" style="width: 300px;">
                </div>
                <button type="submit" class="btn btn-orange">Submit</button>
            </form>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/forget-password.blade.php ENDPATH**/ ?>