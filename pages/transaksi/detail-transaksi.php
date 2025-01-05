<?php
session_start();
require("../../controller/session-validation.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tobaku olifia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/main.css">
</head>

<body>
    <?php
    include_once("../../components/navbar.php")
    ?>
    <div class="container content">
        <?php
        if (isset($_SESSION['message'])) {
            $messageType = $_SESSION['message']['type'];
            $messageContent = $_SESSION['message']['content'];

            echo "
            <div class='alert alert-$messageType alert-dismissible fade show' role='alert'>
                $messageContent
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";

            unset($_SESSION['message']);
        }
        ?>
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <div class="flex-column flex-lg-row d-flex justify-content-between gap-3 pb-3 mb-4 border-bottom">
                <h1>Detail Transaksi</h1>
                <div class="flex-column flex-lg-row d-flex gap-3 align-items-start align-items-lg-center ">
                    <div class="d-flex align-items-center gap-3">
                        <label for="seacrhDataCustomer" class="form-label">Seacrh</label>
                        <input type="text" class="form-control" id="searchDataCustomer">
                        <button type="button" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">No Invoice</th>
                                <th class="col-2" scope="col">Kode Barang</th>
                                <th class="col-2" scope="col">Nama Barang</th>
                                <th class="col-1" scope="col">Jumlah</th>
                                <th class="col-1" scope="col">Harga Barang</th>
                                <th class="col-1" scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no_invoice = isset($_GET['no_invoice']) ? $_GET['no_invoice'] : null;

                            require("../../connection/conn-db.php");

                            $totalQuery = mysqli_query($connection, "SELECT COUNT(*) AS total FROM transaksi_detail WHERE no_invoice = '$no_invoice'");
                            $totalData = mysqli_fetch_assoc($totalQuery)['total'];

                            $perPage = 5;
                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $startAt = ($page - 1) * $perPage;

                            $transactions_detail = mysqli_query($connection, "SELECT * FROM transaksi_detail WHERE no_invoice = '$no_invoice' LIMIT $startAt, $perPage");

                            $totalPages = ceil($totalData / $perPage);
                            ?>

                        <tbody>
                            <?php
                            if (mysqli_num_rows($transactions_detail) > 0) {
                                foreach ($transactions_detail as $transaction_detail) {
                                    echo '
                                        <tr>
                                            <td class="px-2 py-4">' . $transaction_detail['no_invoice'] . '</td>
                                            <td class="px-2 py-4">' . $transaction_detail['kode_barang'] . '</td>
                                            <td class="px-2 py-4">' . $transaction_detail['nama_barang'] . '</td>
                                            <td class="px-2 py-4">' . $transaction_detail['jumlah'] . '</td>
                                            <td class="px-2 py-4">' . $transaction_detail['harga_barang'] . '</td>
                                            <td class="px-2 py-4">' . $transaction_detail['total_harga'] . '</td>
                                        </tr>
                                        ';
                                }
                            } else {
                                echo '
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data.</td>
                                        </tr>
                                        ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $page - 1; ?>&no_invoice=<?= $no_invoice; ?>"><i class="bi bi-arrow-left-short"></i></a>
                    </li>

                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <li class="page-item <?= ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?= $i; ?>&no_invoice=<?= $no_invoice; ?>"><?= $i; ?></a>
                        </li>
                    <?php } ?>

                    <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $page + 1; ?>&no_invoice=<?= $no_invoice; ?>"><i class="bi bi-arrow-right-short"></i></a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>