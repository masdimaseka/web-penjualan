<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataNamaBara = $_POST["namaBara"];
    $dataSatuanBara = $_POST["satuanBara"];
    $dataStokAwal = $_POST["stokAwal"];
    $dataHPP = $_POST["HPP"];
    $dataHargaBara = $_POST["hargaBara"];
    $dataCreatedBy = $_SESSION['valid'];

    if ($dataNamaBara != "" || $dataSatuanBara != "" || $dataStokAwal != "" || $dataHPP != "" || $dataHargaBara != "" || $dataCreatedBy != "") {
        require("../connection/conn-db.php");
        $sql = "insert into barang (nama_barang, satuan, stok_awal, HPP, harga_jual, created_by) values ('$dataNamaBara','$dataSatuanBara','$dataStokAwal','$dataHPP','$dataHargaBara', '$dataCreatedBy')";
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

header("Location: ../pages/barang/daftar-barang.php");
exit;
