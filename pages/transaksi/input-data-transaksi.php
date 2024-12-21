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
            <h1>Input Transaksi Penjualan</h1>
            <form action="">
                <div class="mt-5">
                    <p>No Invoice</p>
                    <span class="form-control">1234</span>
                </div>
                <div class="mt-4">
                    <label for="tglTrans" class="form-label">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tglTrans" placeholder="nama kamu...">
                </div>
                <div class="mt-4">
                    <label for="cutomer" class="form-label">Customer</label>
                    <div class="d-flex flex-lg-row flex-column gap-3">
                        <input type="text" class="form-control" id="codeCust" placeholder="Kode Customer...">
                        <span class="form-control">1234</span>
                    </div>
                </div>

                <div class="table-responsive mt-5">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Kode Barang</th>
                                <th class="col-2" scope="col">Nama Barang</th>
                                <th class="col-1" scope="col">Jumlah</th>
                                <th class="col-1" scope="col">Harga Satuan</th>
                                <th class="col-1" scope="col">Harga Total</th>
                                <th class="col-1 text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Tepung Terigu</td>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">20000</td>
                                <td class="px-2 py-4">40000</td>
                                <td class="px-2 py-4 text-center">
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Tepung Terigu</td>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">20000</td>
                                <td class="px-2 py-4">40000</td>
                                <td class="px-2 py-4 text-center">
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Tepung Terigu</td>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">20000</td>
                                <td class="px-2 py-4">40000</td>
                                <td class="px-2 py-4 text-center">
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>

                        </tbody>
                        <tbody>
                            <tr class="table-light">
                                <td class="px-2 py-4">
                                    <input type="int" class="form-control" id="noBarang" placeholder="Kode barang...">
                                </td>
                                <td class="px-2 py-4">
                                    <input type="int" class="form-control" id="namaBarang" placeholder="Nama barang...">
                                </td>
                                <td class="px-2 py-4">
                                    <input type="int" class="form-control" id="jumBarang" placeholder="Jumlah...">
                                </td>
                                <td class="px-2 py-4">
                                    <input type="int" class="form-control" id="hargaBarang" placeholder="Harga barang...">
                                </td>
                                <td class="px-2 py-4">
                                    <input type="int" class="form-control" id="hargaTotal" placeholder="Harga total...">
                                </td>
                                <td class="px-2 py-4 text-center">
                                    <button type="button" class="btn btn-success">Tambah</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex flex-row felx-lg-column gap-3 mt-3">
                    <div class="form-control">
                        Total Barang : <span>80</span>
                    </div>
                    <div class="form-control">
                        Total Harga : <span>800000</span>
                    </div>
                </div>

                <button type="submit" class="mt-5 py-2 btn btn-primary w-100">Simpan</button>
                <a href="./daftar-transaksi.php">
                    <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Batal</button>
                </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>