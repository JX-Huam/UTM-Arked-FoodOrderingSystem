
<?php $__env->startSection('title', 'Registration'); ?>
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        body {
            /*background: url('<?php echo e(asset('images/art.jpg')); ?>') center center fixed; */
            background-size: cover;
            margin: 0; /* Reset margin to remove default body margin */
            padding: 0; /* Reset padding to remove default body padding */
        }

        .container {
            color: #800000; /* Maroon */
            border-radius: 8px;
            padding: 20px;
            margin-top: 50px;
            text-align: left;
            background-color: rgba(255, 255, 255, 0.8); /* Misty Rose with opacity */
            height: 100vh; /* Set height to 100vh */
            width: 100vw; /* Set width to 100vw */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        .alert {
            color: #8b0000; /* Dark Red */
            margin-bottom: 10px;
        }

        label {
            color: #800000; /* Maroon */
        }

        .form-control {
            border: 1px solid #800000; /* Maroon */
            color: #800000; /* Maroon */
        }

        .btn-primary {
            color: #fff; /* White */
            background-color: orange; /* Orange */
            border: 1px solid orange; /* Orange */
            display: block;
            margin: 0 auto; /* Center the button */
        }

        a {
            color: #800000; /* Maroon */
        }

        a:hover {
            color: #8b0000; /* Dark Red */
        }
    </style>
</head>
<body>
    <div class="container">
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

        <form action="<?php echo e(route('registration.post')); ?>" method="POST" class="ms-auto me-auto" style="width: 500px">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/registration.blade.php ENDPATH**/ ?>