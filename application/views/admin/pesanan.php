<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
    <button type="button" class="mt-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahPesanan"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Pesanan</button>
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>
  <!-- Modal -->
  <div class="modal fade" id="tambahPesanan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Pesanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="<?= base_url('admin/pesanan'); ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Kode Transaksi</label>
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="TRN-202004030001">
              <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="kategori">Username</label>
              <select class="form-control" id="kategori" name="kategori">
                <option>anandanurj</option>
                <option>bayufajariyanto</option>
                <option>dellyagus</option>
              </select>
            </div>
            <div class="form-group">
              <label for="kategori">Barang</label>
              <select class="form-control" id="kategori" name="kategori">
                <option>Carrier</option>
                <option>Coocking Set</option>
                <option>Jaket</option>
                <option>Lighting</option>
                <option>Other</option>
                <option>Sandal</option>
                <option>Tenda</option>
              </select>
            </div>
            <div class="form-group">
              <label for="stok">Jumlah Barang</label>
              <input type="text" class="form-control" max="3" name="stok" id="stok" value="<?= set_value('stok'); ?>" placeholder="Jumlah barang">
              <?= form_error('stok', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Rp. 20000">
              <?= form_error('harga', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
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
      <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
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
            <?php foreach ($pesanan as $p) : ?>
              <tr>
                <td><?= $p['kode_transaksi'] ?></td>
                <td><?= $p['username'] ?></td>
                <td><?= $p['tanggal_order'] ?></td>
                <td><?= $p['total'] ?></td>
                <td>Lunas</td>
                <td><a href="#" class="btn btn-primary">Detail</a></td>
              </tr>
            <?php endforeach; ?>
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