<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .login-container {
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .login-container label {
        font-size: 14px;
        color: #333;
    }

    .login-container input[type="text"],
    .login-container input[type="email"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .login-container button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .login-container button:hover {
        background-color: #45a049;
    }

    .login-container .register-link {
        text-align: center;
        margin-top: 10px;
    }

    .login-container .register-link a {
        color: #4CAF50;
        text-decoration: none;
    }

    .login-container .register-link a:hover {
        text-decoration: underline;
    }
</style>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Création de compte</title>

</head>

<body>

    <div class="login-container">
        <h2>Connexion</h2>
        <form action="/" method="post">

            <label for="firstname">First name</label><br>
            <input type="text" id="firstname" name="firstname" required><br><br>

            <label for="lastname">Last name</label><br>
            <input type="text" id="lastname" name="lastname" required><br><br>

            <label for="username">Email</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" required>

            <label for="role">Role</label><br>
            <input type="text" id="role" name="role" required>

            <button type="submit" name="create">Créer un compte</button>
        </form>
    </div>

</body>

</html>