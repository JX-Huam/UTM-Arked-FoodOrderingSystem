<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Custom Auth Laravel'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <?php echo $__env->renderWhen(Route::currentRouteName() == 'login', 'include.headerlogin', ['param' => 'value'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <?php echo $__env->renderWhen(Route::currentRouteName() != 'login', 'include.header', ['param' => 'value'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/layout.blade.php ENDPATH**/ ?>