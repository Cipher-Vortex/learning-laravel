    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 25px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background: #3490dc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-box button:hover {
            background: #2779bd;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="/register">
            @csrf
            <!-- Laravel CSRF -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
