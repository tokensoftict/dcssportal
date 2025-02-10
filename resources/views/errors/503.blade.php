<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We'll Be Back Soon!</title>
    <style>
        body {
            background-color: #ffffff;
            color: #333;
            text-align: center;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #2C3E50;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        .logo {
            max-width: 750px;
            width: 550px;
            margin-bottom: 20px;
        }

        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top: 4px solid #2C3E50;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Logo (Update the src to match your logo's location) -->
    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">

    <h1>We'll Be Back Soon!</h1>
    <p>Our website is currently undergoing scheduled maintenance. We appreciate your patience and will be back shortly.</p>

    <div class="spinner"></div>
</div>

</body>
</html>
