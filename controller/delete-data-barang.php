<?php
session_start();

$data_kode = $_GET["kode"];
require("../connection/conn-db.php");
$delete = mysqli_query($connection, "delete from barang where kode = '$data_kode'");

try {
    if ($delete) {
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

header("Location: ../pages/barang/daftar-barang.php");
exit;
