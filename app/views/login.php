<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Welcome !</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="pwd_hash">Password:</label>
            <input type="password" name="pwd_hash" id="pwd_hash">
            <div class="select_button">
                <input type="submit" value="Login" class="button">
                <button class="button"><a href="register.php">Sign In</a></button>
            </div>
        </form>
    </div>
</body>
</html>