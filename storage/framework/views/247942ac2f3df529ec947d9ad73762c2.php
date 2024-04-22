<nav class="navbar navbar-expand-lg" style="background-color: #800000; color: #fff;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #fff;"><?php echo e(config('app.name')); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color: #fff;">Home</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
        
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>" style="color: #fff;">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>" style="color: #fff;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('registration')); ?>" style="color: #fff;">Registration</a>
                    </li>
                <?php endif; ?>
            </ul>
            <span class="navbar-text" style="color: #fff;"><?php if(auth()->guard()->check()): ?><?php echo e(auth()->user()->name); ?><?php endif; ?></span>
        </div>
    </div>
</nav>
<?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/include/header.blade.php ENDPATH**/ ?>