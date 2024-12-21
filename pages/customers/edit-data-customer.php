<?php
session_start();
require("../../controller/session-validation.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tobaku olifia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/main.css">
</head>

<body>
    <?php
    include_once("../../components/navbar.php");
    $data_kode = $_GET["kode"];
    require("../../connection/conn-db.php");
    $customer = mysqli_query($connection, "select * from customer where kode = '$data_kode'");
    $data = mysqli_fetch_assoc($customer)
    ?>

    <div class="container content">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <h1>Input Data Customer</h1>
            <form method="POST" action="../../controller/update-data-customer.php">
                <div class="mt-5">
                    <label for="kodeCust" class="form-label">Kode Customer</label>
                    <input value="<?= $data_kode ?>" readonly type="text" class="form-control" id="kodeCust" name="kodeCust">
                </div>
                <div class="mt-4">
                    <label for="namaCust" class="form-label">Nama Customer</label>
                    <input value="<?= $data['nama'] ?>" type="text" class="form-control" id="namaCust" name="namaCust" placeholder="nama kamu..." required>
                </div>
                <div class="mt-4">
                    <label for="alamatCust" class="form-label">Alamat Customer</label>
                    <input value="<?= $data['alamat'] ?>" type="text" class="form-control" id="alamatCust" name="alamatCust" placeholder="alamat kamu..." required>
                </div>
                <div class="mt-4">
                    <label for="telpCust" class="form-label">No Telp Customer</label>
                    <input value="<?= $data['telp'] ?>" type="number" class="form-control" id="telpCust" name="telpCust" placeholder="telp kamu..." required>
                </div>
                <div class="mt-4">
                    <label for="nikCust" class="form-label">NIK Customer</label>
                    <input value="<?= $data['nik'] ?>" type="number" class="form-control" id="nikCust" name="nikCust" placeholder="nik kamu..." required>
                </div>
                <div class="mt-4">
                    <label for="npwpCust" class="form-label">NPWP Customer</label>
                    <input value="<?= $data['npwp'] ?>" type="number" class="form-control" id="npwpCust" name="npwpCust" placeholder="npwp kamu..." required>
                </div>
                <button type="submit" class="mt-5 py-2 btn btn-primary w-100">Simpan</button>
                <a href="./daftar-customer.php">
                    <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Batal</button>
                </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>