<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

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
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            color: #333;
            padding: 0;
            margin: 0;
        }

        .navbar {
            background-color: #222;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
            color: #ffeb3b;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 120px;
            padding: 40px;
        }

        .image-container img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .content {
            text-align: center;
            padding: 40px 20px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #222;
        }

        .content p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }

        .content p:last-of-type {
            color: #999;
            margin-top: 20px;
        }

        /* Style the logout form */
        .logout-form {
            display: inline-block;
            margin-left: 20px;
        }

        .logout-form button {
            background: none;
            border: none;
            color: white;
            font: inherit;
            cursor: pointer;
            padding: 0;
            transition: color 0.3s;
        }

        .logout-form button:hover {
            color: #ffeb3b;
        }
    </style>
</head>

<body>

    <!-- Full-width Navbar -->
    <div class="navbar">
        <div class="logo">MythMap</div>
        <div>
            <a href="{{ url('/dashboard') }}">Dashboard</a>

            <!-- Logout form to send POST request -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    <!-- Image Container -->
    <div class="image-container">
        <img src="{{asset('public/images/world-map.png')}}">
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Miti/Legendas</h1>
        <p>Kaut kas nesagāja ar bildi, bet šeit būs pasaules mape, kur būs norādīti punkti uz noteiktām valstīm. Nospiežot uz kādu, scrollos uz leju un parādīs kādu informāciju par populārākajiem mītiem un leģendām šajā valstī. Vēl kaut kas būs jāpievieno, bet vēl neesmu izdomājis.</p>
        <p>Ignorējiet dizainu, tas būs daudz labāks!</p>
    </div>

</body>

</html>