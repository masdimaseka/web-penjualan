<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataNamaCust = $_POST["namaCust"];
    $dataAlamatCust = $_POST["alamatCust"];
    $dataTelpCust = $_POST["telpCust"];
    $dataNikCust = $_POST["nikCust"];
    $dataNpwpCust = $_POST["npwpCust"];
    $dataCreatedBy = $_SESSION['valid'];

    if ($dataNamaCust != "" || $dataAlamatCust != "" || $dataTelpCust != "" || $dataNikCust != "" || $dataNpwpCust != "" || $dataCreatedBy != "") {
        require("../connection/conn-db.php");
        $sql = "insert into customer (nama, alamat, telp, nik, npwp, created_by) values ('$dataNamaCust','$dataAlamatCust','$dataTelpCust','$dataNikCust','$dataNpwpCust', '$dataCreatedBy')";
        $save = mysqli_query($connection, $sql);

        try {
            if ($save) {
                $_SESSION['message'] = [
                    'type' => 'success',
                    'content' => 'Data berhasil disimpan!',
                ];
            } else {
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'content' => 'Data gagal disimpan!',
                ];
            }
        } catch (mysqli_sql_exception $e) {
            $_SESSION['message'] = [
                'type' => 'danger',
                'content' => 'Error: ' . $e->getMessage(),
            ];
        }
    } else {
        $_SESSION['message'] = [
            'type' => 'danger',
            'content' => 'Oops, semua field harus diisi!',
        ];
    }
}

header("Location: ../pages/customers/daftar-customer.php");
exit;
