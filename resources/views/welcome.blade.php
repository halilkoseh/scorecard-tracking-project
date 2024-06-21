<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz</title>
    <style>
        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #343a40;
            padding: 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 1rem;
        }
        .navbar .nav-links {
            display: flex;
            align-items: center;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        h1 {
            color: #343a40;
        }
        .logout-form {
            display: inline;
        }
        .logout-button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            text-decoration: none;
            margin-left: 1rem;
            font: inherit;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">
            <a href="#" class="navbar-brand">SKS Puantaj</a>
        </div>
        <div class="nav-links">
            <a href="/profile">Profilim</a>
            <a href="/mesailerim">Mesailerim</a>
            <a href="/hakedis">Hakediş</a>
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="logout-button">Oturumu Kapat</button>
            </form>
        </div>
    </nav>
    <div class="content">
        <h1>Hoşgeldiniz {{ $user }}</h1>
    </div>
</body>
</html>