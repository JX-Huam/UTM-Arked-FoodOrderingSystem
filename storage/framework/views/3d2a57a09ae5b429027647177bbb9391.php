<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page 2</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: url('images/art.png') center/cover no-repeat; /* Set the background image */
        }

        .container {
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the container */
            border-radius: 10px; /* Add some border-radius for a rounded look */
        }

        h1 {
            color: #333;
        }

        .maroon-text {
            color: maroon;
        }

        p {
            color: maroon; /* Set to maroon color */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #808080; /* Set to gray */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #696969; /* Darker gray on hover */
        }

        .logo {
            width: 100%; /* Adjust the width as needed */
            max-width: 400px; /* Maximum width to maintain aspect ratio */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px; /* Adjust margin as needed */
        }

        .orange-text {
            color: orange;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="logo" src="images/que.png" alt="Logo">
        <h1 class="maroon-text">No More<br> <span class="orange-text">LONG</span> <br> <span class="maroon-text">QUEUE</span></h1>
        <a href="<?php echo e(route('landingPage.3')); ?>" class="btn">Next</a>
        <br>
        <br>
        <br>
        <p class="maroon-text"><b>MYUTM</b> ARKED</p>
    </div>
</body>
</html>



<?php /**PATH D:\UTM\SEMESTER 5\App Development\utmarked\final\first-app\my_first_app\resources\views/orders/landingpage2.blade.php ENDPATH**/ ?>