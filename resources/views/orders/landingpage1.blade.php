<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
             background-image: url('{{ asset("images/art.png") }}'); /* Add the path to your background image */
            background-size: cover; /* Ensure the background image covers the entire body */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */
        }

        .container {
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the container */
            border-radius: 10px; /* Add some border-radius for a rounded look */
        }

        h3 {
            color: maroon;
        }

        h1 {
            color: maroon;
        }

        p {
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .logo {
            width: 300px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>MYUTM ARKED</h3>
        <br>
        <br>
        <h1>Find Your <br> Best Food</h1>
        <p>Restaurant in your hands now</p>
        <br>
        <img class="logo" src="{{ asset('images/logoo.png') }}" alt="Logo">
        <br>
        <br>
        <br>
        <br>
        <a href="{{ route('landingPage.2') }}" class="btn">Get Started</a>
    </div>
</body>
</html>


