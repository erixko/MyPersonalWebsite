<?php
    include("con.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_login.css">
    <title>Login Page</title>
</head>
<body>
    <a href="index.php" style="color:white;">Home</a>
    <div class=main_main_login>
        <div class="main_login">
            <div class="login">
                <h1 style="color:white;">Login</h1>
                <form action="login.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>