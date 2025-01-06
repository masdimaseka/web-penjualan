<?php
session_start();
require("../../controller/session-validation.php");
require("../../connection/conn-db.php"); // Pastikan file ini mengatur koneksi ke database Anda

$tanggalDipilih = isset($_GET['tanggal']) ? $_GET['tanggal'] : null;
$dataOmset = [];
$totalOmset = 0;

if ($tanggalDipilih) {
    $query = "
        SELECT tgl_transaksi, SUM(total_harga) AS omset
        FROM transaksi_detail
        WHERE tgl_transaksi = ?
        GROUP BY tgl_transaksi
    ";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $tanggalDipilih);
} else {
    $query = "
        SELECT tgl_transaksi, SUM(total_harga) AS omset
        FROM transaksi_detail
        GROUP BY tgl_transaksi
        ORDER BY tgl_transaksi ASC
    ";
    $stmt = $connection->prepare($query);
}

$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $dataOmset[] = $row;
    $totalOmset += $row['omset'];
}

$stmt->close();
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
    <?php
    include_once("../../components/navbar.php");
    ?>
    <div class="container content">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <div class="d-flex flex-lg-row flex-column justify-content-lg-between align-items-lg-center gap-3 mb-3">
                <h1>Laporan Omset</h1>
            </div>
            <div class="mt-5 p-4 border border-1 rounded-3">
                <h3>Laporan Omset Harian</h3>
                <form method="GET" action="">
                    <div class="mt-4">
                        <label for="tglTrans" class="form-label">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="tglTrans" name="tanggal" value="<?= htmlspecialchars($tanggalDipilih) ?>">
                        <button type="submit" class="mt-4 py-2 btn btn-primary w-100">Filter</button>
                    </div>
                </form>

                <div class="table-responsive mt-5">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">No</th>
                                <th class="col-2" scope="col">Tanggal</th>
                                <th class="col-2" scope="col">Omset</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($dataOmset) > 0): ?>
                                <?php foreach ($dataOmset as $index => $row): ?>
                                    <tr>
                                        <td class="px-2 py-4"><?= $index + 1 ?></td>
                                        <td class="px-2 py-4"><?= htmlspecialchars($row['tgl_transaksi']) ?></td>
                                        <td class="px-2 py-4"><?= number_format($row['omset'], 0, ',', '.') ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data transaksi.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="form-control">
                        Total Omset : <span><?= number_format($totalOmset, 0, ',', '.') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>