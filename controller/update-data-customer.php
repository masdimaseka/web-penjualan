<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataKodeCust = $_POST["kodeCust"];
    $dataNamaCust = $_POST["namaCust"];
    $dataAlamatCust = $_POST["alamatCust"];
    $dataTelpCust = $_POST["telpCust"];
    $dataNikCust = $_POST["nikCust"];
    $dataNpwpCust = $_POST["npwpCust"];

    if ($dataNamaCust != "" || $dataAlamatCust != "" || $dataTelpCust != "" || $dataNikCust != "" || $dataNpwpCust != "") {
        require("../connection/conn-db.php");
        $sql = "update customer set 
                        nama = '$dataNamaCust', 
                        alamat = '$dataAlamatCust', 
                        telp = '$dataTelpCust', 
                        nik = '$dataNikCust', 
                        npwp = '$dataNpwpCust' 
                    where kode = '$dataKodeCust'";
        $save = mysqli_query($connection, $sql);

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
    } else {
        $_SESSION['message'] = [
            'type' => 'danger',
            'content' => 'Oops, semua field harus diisi!',
        ];
    }
}

header("Location: ../pages/customers/daftar-customer.php");
exit;
