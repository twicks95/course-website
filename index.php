<?php

require "functions.php";

// $users = query("SELECT * FROM users");
// print_r($users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An Online Course Website | Linguo</title>
    <link rel="stylesheet" href="css/index.css">
</head>



<body>
    <nav>
        <div class="nav-wrapper">
            <a class="brand-logo" href="index.php">Linguo</a>
            <div class="nav-menu">
                <ul>
                    <li><a href="http://">Home</a></li>
                    <li><a href="http://">Available Course</a></li>
                    <li><a href="http://">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content-wrapper">
        <h1 class="title">Learn English, French, And Germany</h1>
        <p class="description">Linguo provides three most used foreign languages to enhance your language skills beyond your current level</p>

        <!-- <hr> -->

        <div class="btn-login-group">
            <p>You are not logged in</p><a id="btn-login"><i class="icon" data-feather="log-in"></i>Login</a>
        </div>
    </div>

    <div id="login-panel">
        <div class="login-wrapper">
            <div class="login-background">
                <i class="btn-x" data-feather="x"></i>
                <h3>User Login</h3>
                <form class="login-form" action="" method="POST">
                    <div class="form-group">
                        <label class="lb-username" for="username">Username</label>
                        <input class="username" type="text" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label class="lb-password" for="password">Password</label>
                        <input class="password" type="password" name="password" id="password">
                    </div>
                    <div class="remember-me-group">
                        <input class="chbox-remember" type="checkbox" name="remember" id="remember">
                        <label class="lb-remember" for="remember">Remember me</label>
                    </div>
                    <button type="submit"><i class="icon" data-feather="log-in"></i>Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script>
        const btnLogin = document.getElementById("btn-login");
        const btnX = document.getElementsByClassName("btn-x");
        const loginPanel = document.getElementById("login-panel");

        btnLogin.addEventListener("click", () => {
            loginPanel.style.display = "block";
        })

        btnX[0].addEventListener("click", () => {
            loginPanel.style.display = "none";
        })
    </script>
</body>

</html>