<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e0e0e0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Take full screen height */
            padding: 0;
            margin: 0;
            flex-direction: column;
        }

        /* Full-width navbar at the top */
        .navbar {
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            background-color: #333;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #ccc;
        }

        .logo {
            height: 100%;
            width: 100%;
        }

        /* Center content with margin for the navbar */
        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin-top: 80px;
            /* Extra margin to account for the navbar height */
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            color: #666;
        }

        .cta-buttons {
            margin-top: 30px;
        }

        .cta-buttons a {
            display: inline-block;
            margin: 0 10px;
            padding: 15px 30px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .cta-buttons a:hover {
            background-color: #555;
        }

        .cta-buttons a.dashboard {
            background-color: #4CAF50;
        }

        .cta-buttons a.dashboard:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
        }
    </style>
</head>

<body>

    <!-- Full-width Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('public/yeah.svg') }}" alt="Logo">
        </div>
        <div>
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        <h1>Welcome to the Interactive Myth Map</h1>


        <div class="cta-buttons">
            @auth
            <a href="{{ url('/dashboard') }}" class="dashboard">Go to Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    </div>

</body>

</html>