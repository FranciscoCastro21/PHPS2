<?php

session_start();

if (isset($_SESSION["user_ID"])) {
    
    $mysqli = require __DIR__ . "/dbh.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_ID"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <!-- Sorry couldn't solve the problem with the login, and the button to redirect to upload doesn't work, please use the nav bar to go anywhere :( I AM SORRYYYY -->

<main>
    <?php include ("../globalTemplates/header.php"); ?>

    <section class="SignUp">
    <div class="container">
        <h2>Sign Up</h2>
        <form action="/php/singUp.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="user_password">Password:</label>
                <input type="password" class="form-control" id="user_password" name="user_password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    </div>
    </section>
    <section class="Login">
        <div class="container">
            <h2>Login</h2>
            <form action="./php/login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="user_password" name="user_password" required>
                </div>
                <div class="btn-container">
                <a href="/navigtion/updates.php"><button type="submit" class="btn btn-primary">Login</button></a>
                </div>
            </form>
        </div>
    </section>
    <?php include ("../globalTemplates/footer.php"); ?>
</main>
</body>
</html>