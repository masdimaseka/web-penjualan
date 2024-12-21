<nav class="navbar navbar-expand-lg bg-white border-bottom border-1 fixed-top">
    <div class="container-fluid container">
        <a class="navbar-brand text-primary fw-bold" href="/web-penjualan">Tobaku Olifia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/web-penjualan">Home</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customer
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/customers/daftar-customer.php">Daftar Customer</a></li>
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/customers/input-data-customer.php">Input Customer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Barang
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/barang/daftar-barang.php">Daftar Barang</a></li>
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/barang/input-data-barang.php">Input Barang</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transaksi
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/transaksi/daftar-transaksi.php">Daftar Transaksi</a></li>
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/transaksi/input-data-transaksi.php">Input Transaksi</a></li>
                            <li class="dropdown-item"><a class="nav-link" href="/web-penjualan/pages/transaksi/laporan-transaksi.php">Laporan Transaksi</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <span class="btn username-display btn-primary">
                        <i class="bi bi-person-fill"></i>
                        Username
                    </span>
                </li>
                <li class="nav-item">
                    <a href="login.php">
                        <button class="btn btn-secondary">
                            <i class="bi bi-door-open-fill"></i>
                            Log Out
                        </button>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>