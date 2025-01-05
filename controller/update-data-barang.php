<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataKodeBara = $_POST["kodeBara"];
    $dataNamaBara = $_POST["namaBara"];
    $dataSatuanBara = $_POST["satuanBara"];
    $dataStokAwal = $_POST["stokAwal"];
    $dataHPP = $_POST["HPP"];
    $dataHargaBara = $_POST["hargaBara"];

    if ($dataNamaBara != "" || $dataSatuanBara != "" || $dataStokAwal != "" || $dataHPP != "" || $dataHargaBara != "") {
        require("../connection/conn-db.php");
        $sql = "update barang set 
                        nama_barang = '$dataNamaBara', 
                        satuan = '$dataSatuanBara', 
                        stok_awal = '$dataStokAwal', 
                        HPP = '$dataHPP', 
                        harga_jual = '$dataHargaBara' 
                    where kode = '$dataKodeBara'";
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
