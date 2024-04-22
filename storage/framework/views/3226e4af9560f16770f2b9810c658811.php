<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page 4</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #800000; /* Maroon color */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f39c12;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>
    <!-- Specify a specific width for the image -->
    <img src="images/tablet.png" alt="Description of the image" width="200">
    <div class="container">
        <!-- Use inline style to change the color of "CUSTOMIZE" to orange -->
        <h1><span style="color: #f39c12;">CUSTOMIZE</span><br> <span style="color: #800000;">Your Meal</span></h1>
        <br>
        <br>
        <a href="<?php echo e(route('login')); ?>" class="btn">Grab Your Meal Now</a>
        <br>
        <br>
        <br>
        <br>
        <!-- Change the color of the text to maroon -->
        <p><b>MYUTM</b> ARKED</p>
    </div>
</body>
</html>



<?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/orders/landingpage4.blade.php ENDPATH**/ ?>