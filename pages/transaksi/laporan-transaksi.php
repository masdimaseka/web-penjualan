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
            <div class="d-flex flex-lg-row flex-column justify-content-lg-between align-items-lg-center gap-3 mb-3">
                <h1>Laporan Transaksi</h1>
            </div>
            <div class="p-4 border border-1 rounded-3">
                <h3>Laporan Transaksi Penjualan Harian</h3>
                <div class="mt-4">
                    <label for="tglTrans" class="form-label">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tglTrans" placeholder="nama kamu...">
                </div>
                <div class="mt-4">
                    <label for="cutomer" class="form-label">Barang</label>
                    <div class="d-flex flex-lg-row flex-column gap-3">
                        <input type="text" class="form-control" id="codeBarang" placeholder="Kode Barang...">
                        <input type="text" class="form-control" id="namaBarang" placeholder="Nama Barang">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="cutomer" class="form-label">Customer</label>
                    <div class="d-flex flex-lg-row flex-column gap-3">
                        <input type="text" class="form-control" id="codeCust" placeholder="Kode Customer...">
                        <input type="text" class="form-control" id="namaCust" placeholder="Nama Customer">
                    </div>
                </div>

                <div class="table-responsive mt-5">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">No</th>
                                <th class="col-1" scope="col">Tanggal</th>
                                <th class="col-1" scope="col">Invoice</th>
                                <th class="col-2" scope="col">Nama Customer</th>
                                <th class="col-1" scope="col">Kode Barang</th>
                                <th class="col-2" scope="col">Nama Barang</th>
                                <th class="col-1" scope="col">Jumlah</th>
                                <th class="col-1" scope="col">Harga Satuan</th>
                                <th class="col-1" scope="col">Harga Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2 py-4">1</td>
                                <td class="px-2 py-4">01/01/2024</td>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Dimas Eka Putra</td>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Tepung Terigu</td>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">20000</td>
                                <td class="px-2 py-4">40000</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">01/01/2024</td>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Dimas Eka Putra</td>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Tepung Terigu</td>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">20000</td>
                                <td class="px-2 py-4">40000</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">3</td>
                                <td class="px-2 py-4">01/01/2024</td>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Dimas Eka Putra</td>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Tepung Terigu</td>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">20000</td>
                                <td class="px-2 py-4">40000</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>

            <div class="mt-5 p-4 border border-1 rounded-3">
                <h3>Laporan Omset Harian</h3>
                <div class="mt-4">
                    <label for="tglTrans" class="form-label">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tglTrans" placeholder="nama kamu...">
                </div>
                <div class="mt-4">
                    <label for="cutomer" class="form-label">Customer</label>
                    <div class="d-flex flex-lg-row flex-column gap-3">
                        <input type="text" class="form-control" id="codeCust" placeholder="Kode Customer...">
                        <input type="text" class="form-control" id="namaCust" placeholder="Nama Customer">
                    </div>
                </div>

                <div class="table-responsive mt-5">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">No</th>
                                <th class="col-1" scope="col">Tanggal</th>
                                <th class="col-1" scope="col">Omset</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2 py-4">1</td>
                                <td class="px-2 py-4">01/01/2024</td>
                                <td class="px-2 py-4">50000</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">2</td>
                                <td class="px-2 py-4">01/01/2024</td>
                                <td class="px-2 py-4">50000</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">3</td>
                                <td class="px-2 py-4">01/01/2024</td>
                                <td class="px-2 py-4">50000</td>
                            </tr>
                        </tbody>

                    </table>
                    <div class="form-control">
                        Total Omset : <span>800000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>