<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail <?= $title ?></h1>
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>

  <div class="card w-75">
    <div class="card-body">
      <h5 class="card-title">Data Peminjaman</h5>
      <form method="post">
        <div class="form-group row">

        </div>
        <div class="form-group row">

        </div>
        <div class="form-group row">

        </div>
        <div class="form-group row">

        </div>

        <a href="<?= base_url('admin/peminjaman') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->