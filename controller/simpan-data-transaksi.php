<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $noInvoice = $_POST['noInvoice'];
    $tglTrans = $_POST['tanggalTrans'];
    $codeCust = $_POST['kodeCust'];
    $namaCust = $_POST['namaCust'];

    $kodeBarang = $_POST['kodeBarang'];
    $namaBarang = $_POST['namaBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];
    $hargaBarang = $_POST['hargaBarang'];
    $totalHarga = $_POST['hargaTotal'];
    $dataCreatedBy = $_SESSION['valid'];

    require("../connection/conn-db.php");

    try {
        $sql_transaksi = "INSERT INTO TRANSAKSI (no_invoice, tgl_transaksi, kode_customer, nama_customer, created_by) VALUES ('$noInvoice', '$tglTrans', '$codeCust', '$namaCust', '$dataCreatedBy')";
        $save  = mysqli_query($connection, $sql_transaksi);
        if ($save) {
            for ($i = 0; $i < count($kodeBarang); $i++) {
                $kodeBarangItem = $kodeBarang[$i];
                $namaBarangItem = $namaBarang[$i];
                $jumlahBarangItem = $jumlahBarang[$i];
                $hargaBarangItem = $hargaBarang[$i];
                $totalHargaItem = $totalHarga[$i];

                $sql_detail = "INSERT INTO TRANSAKSI_DETAIL (no_invoice, tgl_transaksi, kode_customer, nama_customer, kode_barang, nama_barang, jumlah, harga_barang, total_harga, created_by) VALUES ('$noInvoice', '$tglTrans', '$codeCust', '$namaCust', '$kodeBarangItem', '$namaBarangItem', '$jumlahBarangItem', '$hargaBarangItem', '$totalHargaItem', '$dataCreatedBy')";
                $simpan_detail  = mysqli_query($connection, $sql_detail);
            }
            $_SESSION['message'] = [
                'type' => 'success',
                'content' => 'Data berhasil disimpan!',
            ];
        } else {
            $_SESSION['message'] = [
                'type' => 'danger',
                // 'content' => 'Data gagal disimpan!',
                'content' => 'Error: ' . $e->getMessage(),
            ];
        }
    } catch (mysqli_sql_exception $e) {
        $_SESSION['message'] = [
            'type' => 'danger',
            'content' => 'Error: ' . $e->getMessage(),
        ];
    }
}

header("Location: ../pages/transaksi/daftar-transaksi.php");
exit;
