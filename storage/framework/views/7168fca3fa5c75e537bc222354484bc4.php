<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page 3</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            text-align: center;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
            /* Set the background image */
            background-image: url('images/orange.png'); /* Replace 'images/background.jpg' with your actual image path */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */
        }

        .container {
            padding: 50px;
        }

        h1 {
            color: #333;
            text-align: left; /* Align text to the left */
        }

        p {
            color: maroon; /* Set text color to maroon */
            text-align: left; /* Align text to the left */
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

        .avif-image {
            width: 100%; /* Adjust the width as needed */
            max-width: 600px; /* Maximum width to maintain aspect ratio */
            height: auto; /* Maintain aspect ratio */
            margin-top: 20px; /* Adjust margin as needed */
        }

        .orange-text {
            color: orange;
        }

        .maroon-text {
            color: maroon;
        }
    </style>
</head>
<body>
    <div class="container">
        <p><b style="color: maroon;">MYUTM </b>ARKED</p>
        <br>
        <br>
        <br>
        <h1><span class="orange-text">Get</span><br><span class="maroon-text">NOTIFIED</span></h1>
        <p>When your food is ready.</p>
        <a href="<?php echo e(route('landingPage.4')); ?>" class="btn">Next</a>
    </div>

    <!-- Add the AVIF image at the bottom of the page -->
    <img class="avif-image" src="images/hand.png" alt="AVIF Image">
</body>
</html>





<?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/orders/landingpage3.blade.php ENDPATH**/ ?>