<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            /* Optional background color */
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .image-container {
            display: flex;
            justify-content: center;
            /* Center the image */
            margin-top: 80px;
            /* Adjust for navbar height */
            padding: 20px;
            /* Add padding for spacing */
        }

        .image-container img {
            max-width: 80%;
            /* Adjust the maximum width as needed */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 10px;
            /* Optional rounded corners */
        }
    </style>
</head>

<body>

    <!-- Full-width Navbar -->
    <div class="navbar">
        <div class="logo">My Laravel App</div>
        <div>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <!-- Image Container -->
    <div class="image-container">
        <img src="public/world-map.png" alt="World">
    </div>

    <!-- Other Dashboard Content Here -->
    <div class="content">
        <h1>Miti/Legendas</h1>
        <p>Kaut kas nesagaja ar bildi, bet seit bus pasaules mape, kur bus noraditi punkti uz noteiktam valstim, un nospiezot uz kadu scrollos uz leju un paradis kadu info par popularakajiem mitiem un legendam saja valsti, vel kautkas bus japieliek, bet vel neesmu izdomajis. </p>
    </div>
    <br>
    <p>Ignorejiet dizainu bus daudz labak</p>
</body>

</html>