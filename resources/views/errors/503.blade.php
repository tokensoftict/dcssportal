<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We'll Be Back Soon!</title>
    <style>
        body {
            background-color: #2C3E50;
            color: #ECF0F1;
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
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #BDC3C7;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid #ECF0F1;
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
    <!-- Logo (Change the src to your logo URL) -->
    <img src="{{ asset("img/logo.png") }}" alt="Logo" class="logo">

    <h1>We'll Be Back Soon!</h1>
    <p>Our website is currently undergoing scheduled maintenance. We appreciate your patience and will be back shortly.</p>

    <div class="spinner"></div>
</div>

</body>
</html>
