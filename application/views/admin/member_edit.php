<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <button type="button" class="mt-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahMember"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Member</button>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
      Launch static backdrop modal
    </button> -->
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>

  <div class="card w-75">
    <div class="card-body">
      <h5 class="card-title">Data Member</h5>
      <form method="post">
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
            <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="telp" class="col-sm-2 col-form-label">No. Telepon</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="telp" name="telp" value="<?= $user['telp'] ?>">
            <?= form_error('telp', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="kitas" class="col-sm-2 col-form-label">Kartu Identitas</label>
          <div class="col-sm-10">
            <select class="form-control" id="kitas" name="kitas">
              <option value="<?= $user['jenis_kitas'] ?>"><?= $user['jenis_kitas'] ?></option>
              <?php
              $array = ['KTP', 'KTM', 'SIM'];
              foreach ($array as $a) {
                if ($a != $user['jenis_kitas']) {
                  echo '<option value="' . $a . '">' . $a . '</option>';
                }
                // var_dump($a);
              }
              ?>
            </select>
            <?= form_error('kitas', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>">
            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="nokitas" class="col-sm-2 col-form-label">Nomor Identitas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nokitas" name="nokitas" value="<?= $user['no_kitas'] ?>">
            <?= form_error('nokitas', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat Identitas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat'] ?>">
            <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <a href="<?= base_url('admin/member') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->