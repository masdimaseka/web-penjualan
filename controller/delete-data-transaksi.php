<?php
session_start();

$data_kode = $_GET["no_invoice"];
require("../connection/conn-db.php");
$delete = mysqli_query($connection, "delete from transaksi where no_invoice = '$data_kode'");
$delete_detail = mysqli_query($connection, "delete from transaksi_detail where no_invoice = '$data_kode'");

try {
    if ($delete && $delete_detail) {
        $_SESSION['message'] = [
            'type' => 'success',
            'content' => 'Data berhasil dihapus!',
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'danger',
            'content' => 'Data gagal dihapus!',
        ];
    }
} catch (mysqli_sql_exception $e) {
    $_SESSION['message'] = [
        'type' => 'danger',
        'content' => 'Error: ' . $e->getMessage(),
    ];
}

header("Location: ../pages/transaksi/daftar-transaksi.php");
exit;
