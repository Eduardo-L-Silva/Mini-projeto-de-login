<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            margin-top: 100px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-container label {
            display: block;
            margin-bottom: 10px;
        }
        
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .login-container .error-message {
            color: #ff0000;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        session_start();
        if (isset($_SESSION["login_error"])) {
            echo '<div class="error-message">' . $_SESSION["login_error"] . '</div>';
            unset($_SESSION["login_error"]);
        }
        ?>
        <form action="recebe_login.php" method="POST">
            <label for="user">Nome de usuário:</label>
            <input type="text" id="user" name="user" required><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
