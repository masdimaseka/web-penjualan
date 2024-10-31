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
            <div class="flex-column flex-lg-row d-flex justify-content-between gap-3 pb-3 mb-4 border-bottom">
                <h1>Daftar Customer</h1>
                <div class="flex-column flex-lg-row d-flex gap-3 align-items-start align-items-lg-center ">
                    <div class="d-flex align-items-center gap-3">
                        <label for="seacrhDataCustomer" class="form-label">Seacrh</label>
                        <input type="text" class="form-control" id="searchDataCustomer">
                        <button type="button" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                    <a href="./input-data-customer.php">
                        <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Input Data</button>
                    </a>
                </div>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table table-hover table-fixed">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Kode Customer</th>
                                <th class="col-2" scope="col">Nama Customer</th>
                                <th class="col-2" scope="col">Alamat</th>
                                <th class="col-1" scope="col">Telp</th>
                                <th class="col-1" scope="col">NIK</th>
                                <th class="col-1" scope="col">NPWP</th>
                                <th class="col-1" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Dimas Eka Putra Sahtio</td>
                                <td class="px-2 py-4">Jl. Subur Gg Mirah Pemecutan 3 Blok C No.7 Denpasar Barat, Denpasar, Bali</td>
                                <td class="px-2 py-4">0891627450192</td>
                                <td class="px-2 py-4">517123241151</td>
                                <td class="px-2 py-4"> 123123123131</td>
                                <td class="px-2 py-4">
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-success"><i class="bi bi-pen-fill"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Dimas Eka Putra Sahtio</td>
                                <td class="px-2 py-4">Jl. Subur Gg Mirah Pemecutan 3 Blok C No.7 Denpasar Barat, Denpasar, Bali</td>
                                <td class="px-2 py-4">0891627450192</td>
                                <td class="px-2 py-4">517123241151</td>
                                <td class="px-2 py-4"> 123123123131</td>
                                <td class="px-2 py-4">
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-success"><i class="bi bi-pen-fill"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">1234</td>
                                <td class="px-2 py-4">Dimas Eka Putra Sahtio</td>
                                <td class="px-2 py-4">Jl. Subur Gg Mirah Pemecutan 3 Blok C No.7 Denpasar Barat, Denpasar, Bali</td>
                                <td class="px-2 py-4">0891627450192</td>
                                <td class="px-2 py-4">517123241151</td>
                                <td class="px-2 py-4"> 123123123131</td>
                                <td class="px-2 py-4">
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-success"><i class="bi bi-pen-fill"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>