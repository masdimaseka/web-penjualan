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
    include_once("../components/navbar.php")
    ?>

    <div class="container">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $dataNamaCust = $_POST["namaCust"];
                $dataAlamatCust = $_POST["alamatCust"];
                $dataTelpCust = $_POST["telpCust"];
                $dataNikCust = $_POST["nikCust"];
                $dataNpwpCust = $_POST["npwpCust"];

                if ($dataNamaCust != "" || $dataAlamatCust != "" || $dataTelpCust != "" || $dataNikCust != "" || $dataNpwpCust != "") {
                    include "../connection/conn-db.php";
                    $sql = "insert into customer (nama, alamat, telp, nik, npwp) values ('$dataNamaCust','$dataAlamatCust','$dataTelpCust','$dataNikCust','$dataNpwpCust')";
                    $save = mysqli_query($connection, $sql);

                    if ($save) {
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data berhasil disimpan!
                            <a class="btn-close" aria-label="Close" href="../pages/customers/daftar-customer.php"></a>
                        </div>
                        ';
                    } else {
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data gagal disimpan!
                            <a class="btn-close" aria-label="Close" href="../pages/customers/daftar-customer.php"></a>
                        </div>
                        ';
                    }
                } else {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Oops error
                            <a class="btn-close" aria-label="Close" href="../pages/customers/input-data-customer.php"></a>
                        </div>
                        ';
                }
            }
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>