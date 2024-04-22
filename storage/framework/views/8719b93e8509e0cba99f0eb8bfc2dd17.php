
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        body {
            background: url('<?php echo e(asset('images/food.jpg')); ?>') center center fixed;
            background-size: cover;
        }

        .container {
            color: #800000; /* Maroon */
            border-radius: 8px;
            padding: 20px;
            margin-top: 50px;
            text-align: center; /* Center the content */
        }

        .alert {
            color: #8b0000; /* Dark Red */
            margin-bottom: 10px;
        }

        .form-control {
            border: 1px solid #800000; /* Maroon */
            color: #800000; /* Maroon */
            width: 200px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the input */
            display: block; /* Make it a block element */
            margin-bottom: 10px; /* Add margin to space out the input boxes */
        }

        .btn-primary,
        .btn-create-account {
            color: #fff; /* White */
            background-color: #800000; /* Maroon */
            border: 1px solid #800000; /* Maroon */
            display: inline-block;
            text-decoration: none; /* Remove the default underline */
            padding: 10px 20px; /* Add padding for a better appearance */
            border-radius: 5px; /* Add border-radius for rounded corners */
            margin-top: 10px; /* Add margin to space out the buttons */
        }

        .btn-primary:hover,
        .btn-create-account:hover {
            background-color: #8b0000; /* Dark Red */
            border: 1px solid #8b0000; /* Dark Red */
        }

        a {
            color: #800000; /* Maroon */
        }

        a:hover {
            color: #8b0000; /* Dark Red */
        }

        /* Style for the logo */
        .logo {
            width: 300px; /* Adjust the width as needed */
            height: auto;
            margin-bottom: 20px; /* Add margin for spacing */
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

        <form action="<?php echo e(route('login.post')); ?>" method="POST" class="ms-auto me-auto" style="width: 500px">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <!-- Add your image logo here -->
                <img src="<?php echo e(asset('images/logoo.png')); ?>" alt="Logo" class="logo">
                
                <input type="text" class="form-control" name="name" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div>
                <a href="<?php echo e(route("forget.password")); ?>"> Forget Password </a>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo e(route("registration")); ?>" class="btn btn-create-account">Create Account</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/login.blade.php ENDPATH**/ ?>