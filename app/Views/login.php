<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Elora's</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            color: #ff6f91;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ffb3c6;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .login-container button {
            background-color: #ff6f91;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #ff5176;
        }

        .login-container a {
            display: block;
            margin-top: 15px;
            color: #ff6f91;
            text-decoration: none;
        }

        .register-link {
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Sign In</h2>
        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>
        <form action="<?= base_url('login/authenticate') ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <a href="#">Lupa Password?</a>
        </form>
        <div class="register-link">
            <p>Belum punya akun? <a href="<?= base_url('/register') ?>">Register</a></p>
        </div>
    </div>
</body>
</html>
