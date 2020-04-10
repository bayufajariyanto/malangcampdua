<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>

  <div class="card w-75">
    <div class="card-body">
      <h5 class="card-title">Data Barang</h5>
      <form method="post">
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama'] ?>">
            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select class="form-control" id="kategori" name="kategori">
              <option value="<?= $barang['kategori'] ?>"><?= $barang['kategori'] ?></option>
              <?php
              $array = ['Carrier', 'Cooking Set', 'Jaket', 'Lighting', 'Other', 'Sandal', 'Tenda'];
              foreach ($array as $a) {
                if ($a != $barang['kategori']) {
                  echo '<option value="' . $a . '">' . $a . '</option>';
                }
                // var_dump($a);
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="stok" class="col-sm-2 col-form-label">Stok</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="stok" name="stok" value="<?= $barang['stok'] ?>">
            <?= form_error('stok', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="harga" class="col-sm-2 col-form-label">Harga Per Hari</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga'] ?>">
            <?= form_error('harga', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>



        <a href="<?= base_url('admin/barang') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->