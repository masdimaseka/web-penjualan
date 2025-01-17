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
    include_once("../../components/navbar.php")
    ?>

    <div class="container content">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <h1>Input Data barang</h1>
            <form method="POST" action="../../controller/simpan-data-barang.php">
                <div class="mt-4">
                    <label for="namaBara" class="form-label">Nama barang</label>
                    <input type="text" class="form-control" id="namaBara" name="namaBara" placeholder="nama barang..." required>
                </div>
                <div class="mt-4">
                    <label for="satuanBara" class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="satuanBara" name="satuanBara" placeholder="satuan..." required>
                </div>
                <div class="mt-4">
                    <label for="stokAwal" class="form-label">Stock Awal</label>
                    <input type="number" class="form-control" id="stokAwal" name="stokAwal" placeholder="stok awal..." required>
                </div>
                <div class="mt-4">
                    <label for="HPP" class="form-label">HPP</label>
                    <input type="number" class="form-control" id="HPP" name="HPP" placeholder="HPP..." required>
                </div>
                <div class="mt-4">
                    <label for="hargaBara" class="form-label">Harga Jual</label>
                    <input type="number" class="form-control" id="hargaBara" name="hargaBara" placeholder="harga jual..." required>
                </div>
                <button type="submit" class="mt-5 py-2 btn btn-primary w-100">Simpan</button>
                <a href="./daftar-Baraomer.php">
                    <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Batal</button>
                </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>