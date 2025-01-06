<?php
session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tobaku Olifia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/main.css">
</head>

<body>

    <div class="container mt-5">
        <?php

        if (isset($_SESSION['message'])) {
            $messageType = $_SESSION['message']['type'];
            $messageContent = $_SESSION['message']['content'];

            echo "
            <div class='alert alert-$messageType alert-dismissible fade show' role='alert'>
                $messageContent
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";

            unset($_SESSION['message']);
        }

        ?>
        <div class=" mt-4 mb-5 d-flex justify-content-center">
            <div class="container-form px-5 py-5 ">
                <h1>Login</h1>
                <form method="POST" action="../../controller/user-validation.php">
                    <div class="mt-5">
                        <label for="name">Username</label>
                        <input class="form-control" type="text" placeholder="Username kamu..." id="username" name="username">
                    </div>
                    <div class="mt-5">
                        <label for="name">Password</label>
                        <input class="form-control" type="password" placeholder="Password kamu..." id="password" name="password">
                    </div>
                    <button type="submit" name="submit" class="mt-5 py-2 btn btn-primary w-100">Sign In</button>
                    <a href="./register.php">
                        <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Sign Up</button>
                    </a>
                </form>
            </div>
            <div class="d-none d-lg-block">
                <img class="h-100" src="../../public/imgs/banner-login-2.png" alt="">
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>