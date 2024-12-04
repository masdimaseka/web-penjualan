<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tobaku olifia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <?php
    include_once("../components/navbar.php");
    $data_kode = $_GET["kode"];
    include "../connection/conn-db.php";
    $delete = mysqli_query($connection, "delete from customer where kode = '$data_kode'");
    ?>

    <div class="container">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <?php

            if ($delete) {
                echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data berhasil dihapus!
                            <a class="btn-close" aria-label="Close" href="../pages/customers/daftar-customer.php"></a>
                        </div>
                        ';
            } else {
                echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data gagal dihapus!
                            <a class="btn-close" aria-label="Close" href="../pages/customers/daftar-customer.php"></a>
                        </div>
                        ';
            }

            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>