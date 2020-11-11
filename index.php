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
        <h1 class="title">Learn English, French And Germany</h1>
        <p class="description">Linguo provides three most used foreign languages to enhance your language skills beyond your current level</p>

        <!-- <hr> -->

        <div class="btn-login-group">
            <p>You are not logged in</p><a href="pages/login.php"><i class="icon" data-feather="log-in"></i>Login</a>
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>