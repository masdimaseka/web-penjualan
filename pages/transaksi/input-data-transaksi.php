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
            <form method="POST" action="../../controller/simpan-data-transaksi.php">
                <div class="mt-4">
                    <label for="noInvoice" class="form-label">No Invoice</label>
                    <input type="int" name="noInvoice" class="form-control" id="noInvoice" placeholder="No Invoice..." required>
                </div>
                <div class="mt-4">
                    <label for="tanggalTrans" class="form-label">Tanggal Transaksi</label>
                    <input type="date" name="tanggalTrans" class="form-control" id="tglTrans" placeholder="nama kamu..." required>
                </div>
                <div class="mt-4">
                    <label for="kodeCust" class="form-label">Customer</label>
                    <div class="d-flex flex-lg-row flex-column gap-3">
                        <input type="int" name="kodeCust" class="form-control" id="codeCust" placeholder="Kode Customer..." required>
                        <input type="text" name="namaCust" class="form-control" id="namaCust" placeholder="Nama Customer..." required>
                    </div>

                    <div class="table-responsive mt-5">
                        <table class="table table-hover table-fixed" id="tableBarang">
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
                            <tbody id="detailBarang">
                                <tr>
                                    <td class="px-2 py-4">
                                        <input type="int" class="form-control" id="noBarang" name="kodeBarang[]" placeholder="Kode barang..." required>
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="int" class="form-control" id="namaBarang" name="namaBarang[]" placeholder="Nama barang..." required>
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="int" class="form-control" id="jumBarang" name="jumlahBarang[]" placeholder="Jumlah..." required oninput="updateHargaTotal(this)">
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="int" class="form-control" id="hargaBarang" name="hargaBarang[]" placeholder="Harga barang..." required oninput="updateHargaTotal(this)">
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="int" class="form-control" id="hargaTotal" name="hargaTotal[]" placeholder="Total Harga..." readonly>
                                    </td>
                                    <td class="px-2 py-4 text-center">
                                        <button onclick="hapusBaris(this)" type=" button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-success" onclick="tambahBaris()">Tambah Barang</button>
                    </div>

                    <button type="submit" class="mt-5 py-2 btn btn-primary w-100">Simpan</button>
                    <a href="./daftar-transaksi.php">
                        <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Batal</button>
                    </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function hapusBaris(button) {
            const row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        function tambahBaris() {
            const table = document.getElementById("detailBarang");
            const newRow = table.insertRow();

            newRow.innerHTML = `
                <td class="px-2 py-4">
                    <input type="int" class="form-control" id="noBarang" name="kodeBarang[]" placeholder="Kode barang..." required>
                </td>
                <td class="px-2 py-4">
                    <input type="int" class="form-control" id="namaBarang" name="namaBarang[]" placeholder="Nama barang..." required>
                </td>
                <td class="px-2 py-4">
                    <input type="int" class="form-control" id="jumBarang" name="jumlahBarang[]" placeholder="Jumlah..." required oninput="updateHargaTotal(this)">
                </td>
                <td class="px-2 py-4">
                    <input type="int" class="form-control" id="hargaBarang" name="hargaBarang[]" placeholder="Harga barang..." required oninput="updateHargaTotal(this)">
                </td>
                <td class="px-2 py-4">
                    <input type="int" class="form-control" id="hargaTotal" name="hargaTotal[]" placeholder="Total Harga..." readonly>
                </td>
                <td class="px-2 py-4 text-center">
                    <button onclick="hapusBaris(this)" type=" button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                </td>
            `
        }

        function updateHargaTotal(input) {
            const row = input.parentNode.parentNode;
            const jumlah = row.querySelector('input[name="jumlahBarang[]"]').value;
            const hargaSatuan = row.querySelector('input[name="hargaBarang[]"]').value;
            const hargaTotalField = row.querySelector('input[name="hargaTotal[]"]');

            const hargaTotal = (jumlah && hargaSatuan) ? (jumlah * hargaSatuan) : 0;
            hargaTotalField.value = hargaTotal;
        }
    </script>
</body>

</html>