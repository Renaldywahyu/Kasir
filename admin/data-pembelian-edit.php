<?php require_once 'header.php' ?>
<?php require_once 'data-pembelian-proses-tambah.php' ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah Barang</h1>
      <div class="card mb-4">
        <div class="card-body">
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-6">
                <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
                <input type="date" class="form-control" name="tanggal_pembelian" id="tanggal_pembelian" placeholder="Masukkan Tanggal Pembelian" required value="<?php echo isset($_SESSION['tanggal_pembelian']) ? $_SESSION['tanggal_pembelian'] : '' ?>">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <label for="nama_supplier" class="form-label">Nama Supplier</label>
                <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" placeholder="Masukkan Nama Supplier" required value="<?php echo isset($_SESSION['nama_supplier']) ? $_SESSION['nama_supplier'] : '' ?>">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <label for="invoice_pembelian" class="form-label">Invoice Pembelian</label>
                <input type="text" class="form-control" name="invoice_pembelian" id="invoice_pembelian" placeholder="Masukkan Invoice Pembelian" value="<?php echo isset($_SESSION['invoice_pembelian']) ? $_SESSION['invoice_pembelian'] : '' ?>">
              </div>
            </div>
            <h5 class="mt-5 text-center">Daftar Barang</h5>
            <hr>
            <div class="row mb-3">
              <div class="col-md-3">
                <label for="produk_id" class="form-label">Barang</label>
                <select id="produk_id" class="form-select">
                  <option value="">Pilih Barang</option>
                  <?php
                  $sql = "SELECT * FROM produk";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?= $row['produk_id'] ?>"><?= $row['nama_produk'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="number" class="form-control" placeholder="Masukkan Harga Beli" id="harga_beli">
              </div>
              <div class="col-md-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" placeholder="Masukkan Jumlah" id="jumlah">
              </div>
              <div class="col-md-3">
                <br>
                <button type="button" class="btn btn-info mt-2" onclick="tambahBarang()">Tambah / Edit Data</button>
              </div>
              <script>
                function tambahBarang() {
                  var produk_id = document.getElementById('produk_id').value;
                  var harga_beli = document.getElementById('harga_beli').value;
                  var jumlah = document.getElementById('jumlah').value;
                  var tanggal_pembelian = document.getElementById('tanggal_pembelian').value;
                  var nama_supplier = document.getElementById('nama_supplier').value;
                  var invoice_pembelian = document.getElementById('invoice_pembelian').value;
                  if (produk_id == '' || harga_beli == '' || jumlah == '') {
                    alert('Silahkan isi data dengan lengkap');
                    return false;
                  }
                  window.location.href = `data-pembelian-proses-detail-barang.php?proses=tambah_barang&produk_id=${produk_id}&harga_beli=${harga_beli}&jumlah=${jumlah}&tanggal_pembelian=${tanggal_pembelian}&nama_supplier=${nama_supplier}&invoice_pembelian=${invoice_pembelian}`;
                }
              </script>
            </div>
            <hr>
            <table class="table table-bordered">
              <thead>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga Beli</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                if (isset($_SESSION['pembelian_barang'])) { ?>
                  <?php
                  $no = 1;
                  $total = 0;
                  foreach ($_SESSION['pembelian_barang'] as $key => $value) {
                    $subtotal = $value['harga_beli'] * $value['jumlah'];
                    $total += $subtotal;
                  ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $value['nama_produk'] ?></td>
                      <td><?= rupiah($value['harga_beli']) ?></td>
                      <td><?= $value['jumlah'] ?></td>
                      <td class="text-end"><?= rupiah($subtotal) ?></td>
                      <td class="text-center">
                        <a href="data-pembelian-proses-detail-barang.php?proses=hapus_barang&produk_id=<?php echo $value['produk_id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                  <tr>
                    <td colspan="4" class="text-end"><strong>Total</strong></td>
                    <td class="text-end"><strong><?= rupiah($total) ?></strong></td>
                    <td></td>
                  </tr>
                <?php } else { ?>
                  <tr>
                    <td colspan="6" class="text-center"><em>Data Kosong</em></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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