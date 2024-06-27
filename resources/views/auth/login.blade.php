<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .error-message {
            color: #e74c3c;
            margin-top: 10px;
        }

        .success-message {
            color: #4CAF50;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Login</h2>

        @if (session('status'))
            <div class="success-message">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf

            <div>
                <input type="text" id="username" name="username" placeholder="Username"
                    value="{{ old('username') }}" required autofocus>
            </div>

            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        <span>Belum punya akun?<a href="{{ route('register') }}" class="register-link">Register di sini</a></span>
    </div>
</body>

</html>
