<?php require_once 'header.php' ?>
<?php require_once 'proses-tambah-barang.php' ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pendataan Barang</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="username" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama" name="nama_barang" placeholder="Masukkan Nama Barang">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="password" class="form-label">Harga Barang</label>
                                <input type="number" class="form-control" id="barang" name="harga_barang" placeholder="Masukkan Harga Barang">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="konfirmasi_password" class="form-label">Stok Barang</label>
                                <input type="number" class="form-control" id="stok" name="stok_barang" placeholder="Masukkan Stok Barang">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php' ?>