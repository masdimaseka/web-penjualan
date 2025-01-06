<?php
session_start();
require("../../controller/session-validation.php");
require("../../connection/conn-db.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tobaku Olifia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/main.css">
</head>

<body>
    <?php include_once("../../components/navbar.php"); ?>

    <div class="container content">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <div class="d-flex flex-lg-row flex-column justify-content-lg-between align-items-lg-center gap-3 mb-3">
                <h1>Laporan Transaksi</h1>
            </div>
            <div class="p-4 border border-1 rounded-3">
                <h3>Laporan Transaksi Penjualan Harian</h3>

                <?php
                $filterTanggal = $_POST['tglTrans'] ?? null;
                $filterKodeBarang = $_POST['codeBarang'] ?? null;
                $filterNamaBarang = $_POST['namaBarang'] ?? null;
                $filterKodeCust = $_POST['codeCust'] ?? null;
                $filterNamaCust = $_POST['namaCust'] ?? null;

                $query = "SELECT * FROM transaksi_detail";
                $params = [];
                $types = "";

                if ($filterTanggal || $filterKodeBarang || $filterNamaBarang || $filterKodeCust || $filterNamaCust) {
                    $query .= " WHERE 1=1";

                    if ($filterTanggal) {
                        $query .= " AND tgl_transaksi = ?";
                        $params[] = $filterTanggal;
                        $types .= "s";
                    }
                    if ($filterKodeBarang) {
                        $query .= " AND kode_barang LIKE ?";
                        $params[] = "%$filterKodeBarang%";
                        $types .= "s";
                    }
                    if ($filterNamaBarang) {
                        $query .= " AND nama_barang LIKE ?";
                        $params[] = "%$filterNamaBarang%";
                        $types .= "s";
                    }
                    if ($filterKodeCust) {
                        $query .= " AND kode_customer LIKE ?";
                        $params[] = "%$filterKodeCust%";
                        $types .= "s";
                    }
                    if ($filterNamaCust) {
                        $query .= " AND nama_customer LIKE ?";
                        $params[] = "%$filterNamaCust%";
                        $types .= "s";
                    }
                }

                $stmt = $connection->prepare($query);

                if (!empty($params)) {
                    $stmt->bind_param($types, ...$params);
                }

                $stmt->execute();
                $result = $stmt->get_result();
                ?>

                <form action="" method="POST">
                    <div class="mt-4">
                        <label for="tglTrans" class="form-label">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="tglTrans" name="tglTrans" value="<?= htmlspecialchars($filterTanggal) ?>">
                    </div>
                    <div class="mt-4">
                        <label for="barang" class="form-label">Barang</label>
                        <div class="d-flex flex-lg-row flex-column gap-3">
                            <input type="text" class="form-control" id="codeBarang" name="codeBarang" placeholder="Kode Barang..." value="<?= htmlspecialchars($filterKodeBarang) ?>">
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Barang..." value="<?= htmlspecialchars($filterNamaBarang) ?>">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="customer" class="form-label">Customer</label>
                        <div class="d-flex flex-lg-row flex-column gap-3">
                            <input type="text" class="form-control" id="codeCust" name="codeCust" placeholder="Kode Customer..." value="<?= htmlspecialchars($filterKodeCust) ?>">
                            <input type="text" class="form-control" id="namaCust" name="namaCust" placeholder="Nama Customer..." value="<?= htmlspecialchars($filterNamaCust) ?>">
                        </div>
                    </div>
                    <button type="submit" class="mt-4 py-2 btn btn-primary w-100">Filter</button>
                </form>

                <div class="table-responsive mt-5">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">No Invoice</th>
                                <th class="col-1" scope="col">Tgl Transaksi</th>
                                <th class="col-1" scope="col">Kode Customer</th>
                                <th class="col-2" scope="col">Nama Customer</th>
                                <th class="col-1" scope="col">Kode Barang</th>
                                <th class="col-2" scope="col">Nama Barang</th>
                                <th class="col-1" scope="col">Jumlah</th>
                                <th class="col-1" scope="col">Harga Barang</th>
                                <th class="col-1" scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result && $result->num_rows > 0) {
                                $no = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td class='px-2 py-4'>{$row['no_invoice']}</td>
                                            <td class='px-2 py-4'>{$row['tgl_transaksi']}</td>
                                            <td class='px-2 py-4'>{$row['kode_customer']}</td>
                                            <td class='px-2 py-4'>{$row['nama_customer']}</td>
                                            <td class='px-2 py-4'>{$row['kode_barang']}</td>
                                            <td class='px-2 py-4'>{$row['nama_barang']}</td>
                                            <td class='px-2 py-4'>{$row['jumlah']}</td>
                                            <td class='px-2 py-4'>{$row['harga_barang']}</td>
                                            <td class='px-2 py-4'>{$row['total_harga']}</td>
                                          </tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr>
                                        <td colspan='10' class='text-center'>Tidak ada data ditemukan</td>
                                      </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>