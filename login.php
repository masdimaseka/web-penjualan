<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
    <?php
    include_once("components/navbar.php")
    ?>
    <div class="container d-flex justify-content-center">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3 d-flex">
            <div class="d-none d-lg-block me-5">
                <img class="rounded" src="./public/imgs/banner-login.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center">
                <h1>Login</h1>
                <form action="">
                    <div class="mt-5">
                        <label for="name">Email</label>
                        <input class="form-control" type="text" paceholder="example@gmail.com" id="name" name="name">
                    </div>
                    <div class="mt-5">
                        <label for="name">Password</label>
                        <input class="form-control" type=" text" paceholder="Password" id="name" name="name">
                    </div>
                    <button type="submit" class="mt-5 py-2 btn btn-primary w-100">Sign In</button>
                    <a href="#">
                        <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Sign Up</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>