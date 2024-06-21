<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilim</title>
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
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }
        h1 {
            color: #343a40;
        }
        .user-info, .user-edit {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
            margin-top: 1rem;
        }
        .user-info p, .user-edit p {
            margin: 0.5rem 0;
        }
        .user-edit form {
            display: flex;
            flex-direction: column;
        }
        .user-edit label {
            margin-top: 1rem;
        }
        .user-edit input {
            padding: 0.5rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .user-edit button {
            margin-top: 1rem;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .user-edit button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-top: 0.5rem;
        }
        .success-message {
            color: green;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">
            <a href="#" class="navbar-brand">Brand</a>
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
        <h1>Profilim</h1>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="user-info">
            <p><strong>TC:</strong> {{ $user->TC }}</p>
            <p><strong>İsim:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Departman:</strong> {{ $user->department }}</p>
            <p><strong>Okul Numarası:</strong> {{ $user->school_number }}</p>
            <p><strong>Pozisyon:</strong> {{ $user->position }}</p>
        </div>
        <div class="user-edit">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
                <label for="department">Departman</label>
                <input type="text" id="department" name="department" value="{{ $user->department }}" required>
                <label for="position">Pozisyon</label>
                <input type="text" id="position" name="position" value="{{ $user->position }}" required>
                <label for="current_password">Mevcut Parola</label>
                <input type="password" id="current_password" name="current_password" required>
                <label for="new_password">Yeni Parola</label>
                <input type="password" id="new_password" name="new_password" required>
                <label for="new_password_confirmation">Yeni Parolayı Onaylayın</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
                <button type="submit">Güncelle</button>
            </form>
        </div>
    </div>
</body>
</html>