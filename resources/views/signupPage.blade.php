<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SKS Kayıt Ol Sayfası</title>
    <style>
        /*
        SPACING SYSTEM (px)
        2 / 4 / 8 / 12 / 16 / 24 / 32 / 48 / 64 / 80 / 96 / 128

        FONT SIZE SYSTEM (px)
        10 / 12 / 14 / 16 / 18 / 20 / 24 / 30 / 36 / 44 / 52 / 62 / 74 / 86 / 98
        */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html {
            font-family: "Inter", sans-serif;
            color: #343a40;
            line-height: 1;
        }
        body {
            margin: 0 auto;
            height: 100vh;
            position: relative;
            background: linear-gradient(rgba(34, 34, 34, 0.4), rgba(34, 34, 34, 0.4)),
                url('{{ asset("images/izü_okul.jpg") }}') center/cover no-repeat;
        }
        .signup-container {
            height: 600px;
            width: 350px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 5%;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
            background-color: rgba(241, 243, 245, 0.85);
        }
        .flex-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 12px;
        }
        .signup-img {
            margin-top: 32px;
            width: 225px;
            height: 150px;
            display: block;
        }
        .input {
            padding: 4px;
            border: none;
            outline: none;
            width: 190px;
        }
        .input:focus {
            border: none;
            outline: none;
        }
        .user-icon {
            height: 24px;
            width: 24px;
            background-color: transparent;
        }
        .logo-flex {
            display: flex;
            gap: 10px;
            border: 1px solid black;
            background-color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .button {
            position: absolute;
            top: 93%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #228be6;
            color: #f1f3f5;
            padding: 6px 12px;
            border: 1px solid #1c7ed6;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }
        .button:hover {
            background-color: #1971c2;
        }
        .button:active,
        .button:visited {
            background-color: #228be6;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="flex-container">
            <img class="signup-img" src="{{ asset('images/logo-removebg-preview.png') }}" alt="logo" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="logo-flex">
                    <input class="input" type="text" name="TC" placeholder="T.C. Kimlik Numarası" required />
                </div>
                <div class="logo-flex">
                    <input class="input" type="text" name="name" placeholder="Adı Soyadı" required />
                </div>
                <div class="logo-flex">
                    <input class="input" type="email" name="email" placeholder="Okul e-posta adresi" required />
                </div>
                <div class="logo-flex">
                    <input class="input" type="password" name="password" placeholder="Şifre" required />
                </div>
                <div class="logo-flex">
                    <input class="input" type="text" name="department" placeholder="Bölüm/Sınıf" required />
                </div>
                <div class="logo-flex">
                    <input class="input" type="text" name="school_number" placeholder="Okul Numarası" required />
                </div>
                <div class="logo-flex">
                    <input class="input" type="text" name="position" placeholder="Görev" required />
                </div>
                <button class="button" type="submit">Kayıt Ol</button>
            </form>
        </div>
    </div>
</body>
</html>
