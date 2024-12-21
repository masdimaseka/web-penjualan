<?php
session_start();

$data_kode = $_GET["kode"];
require("../connection/conn-db.php");
$delete = mysqli_query($connection, "delete from customer where kode = '$data_kode'");

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

header("Location: ../pages/customers/daftar-customer.php");
exit;
