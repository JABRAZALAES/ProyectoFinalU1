<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px); 
        }

        img{
            height: 100%;
            width: 100%;
        }
        

        .logo {
            font-size: 24px;
            font-weight: 700;
        }

        .right-links {
            display: flex;
            gap: 10px;
        }
    

        .right-links a {
            text-decoration: none;
            color: #2d3748;
            font-weight: 600;
            padding: 8px 16px;
            border: 1px solid #4a5568;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .right-links a:hover {
            background-color: #4a5568;
            color: #ffffff;
        }

        h1 {
            border: 2px solid #4a5568;
            padding: 10px;
            display: inline-block;
        }
    </style>
</head>
<body class="antialiased">
    
    <nav>
        <div class="logo">Minimarket</div>
        <div class="right-links">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}">Iniciar Sesión</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse</a>
                @endif
            @endif
        </div>
    </nav>
    <div class="container">
        <img src="https://th.bing.com/th/id/OIG.dXt1aq0.uqpEL.Fi5_9E?w=1024&h=1024&rs=1&pid=ImgDetMain">
    </div>

</body>
</html>