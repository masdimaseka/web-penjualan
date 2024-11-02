<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tobaku olifia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
    <?php
    include_once("components/navbar.php")
    ?>
    <div class="container">
        <div class="container-form mt-4 mb-5 px-5 py-5 rounded-3">
            <h1>Input Data Barang</h1>
            <form action="">
                <div class="mt-5">
                    <p>Kode Barang</p>
                    <span class="form-control">1234</span>
                </div>
                <div class="mt-4">
                    <label for="namaBarang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="namaBarang" placeholder="nama barang...">
                </div>
                <div class="mt-4">
                    <label for="satuanBarang" class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="satuanBarang" placeholder="satuan barang...">
                </div>
                <div class="mt-4">
                    <label for="stokAwalBarang" class="form-label">Stok Awal</label>
                    <input type="number" class="form-control" id="stokAwalBarang" placeholder="sok awal barang...">
                </div>
                <div class="mt-4">
                    <label for="hppBarang" class="form-label">HPP Barang</label>
                    <input type="number" class="form-control" id="hppBarang" placeholder="hpp barang...">
                </div>
                <div class="mt-4">
                    <label for="hargaJualBarang" class="form-label">Harga Jual Barang</label>
                    <input type="number" class="form-control" id="hargaJualBarang" placeholder="harga jual barang...">
                </div>
                <button type="submit" class="mt-5 py-2 btn btn-primary w-100">Simpan</button>
                <a href="./daftar-barang.php">
                    <button type="button" class="mt-3 py-2 btn btn-secondary w-100">Batal</button>
                </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>