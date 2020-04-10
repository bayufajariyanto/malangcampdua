<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <button type="button" class="mt-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahPesanan"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Pesanan</button>
  </div>
  <!-- Button trigger modal -->

  <?= $this->session->flashdata('message'); ?>
  <!-- Modal -->
  <div class="modal fade" id="tambahPesanan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah <?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?php
        
        ?>
        <form method="post" action="<?= base_url('admin/pesanan'); ?>">
          <div class="modal-body">
            <!-- <div class="form-group">
              <label for="nama">Kode Transaksi</label>
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" ">
              <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
            </div> -->
            <div class="form-group">
              <label for="username">Username</label>
              <select class="form-control" id="username" name="username">
              <?php foreach ($username as $u) : ?>
                  <option><?= $u['username'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="barang">Barang</label>
              <select class="form-control" id="barang" name="barang" size="5">
                <?php foreach ($barang as $b) : ?>
                  <option value="<?= $b['id']; ?>"><?= $b['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah Barang</label>
              <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?= set_value('jumlah'); ?>" placeholder="Jumlah barang">
              <?= form_error('stok', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <!-- <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Rp. 20000">
              <?= form_error('harga', '<small class="text-danger pl-2">', '</small>') ?>
            </div> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data <?= $title ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode Transaksi</th>
              <th>Username</th>
              <th>Tanggal Order</th>
              <th>Total Pembayaran</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode Transaksi</th>
              <th>Username</th>
              <th>Tanggal Order</th>
              <th>Total Pembayaran</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            foreach ($pesanan as $p) :
              if ($p['status'] == 1) {
                $status = 'Lunas';
              } else {
                $status = 'Belum Lunas';
              }
            ?>
              <tr>
                <td><?= $p['kode_transaksi'] ?></td>
                <td><?= $p['username'] ?></td>
                <td><?= date('d F Y', $p['tanggal_order']) ?></td>
                <td>Rp. <?= $p['total'] ?></td>
                <td><?= $status ?></td>
                <td><a href="<?= base_url() ?>admin/pesanan_detail/<?=$p['id']?>" class="btn btn-primary">Detail</a></td>
              </tr>
            <?php endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->