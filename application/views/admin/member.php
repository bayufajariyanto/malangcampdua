<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Member</h1>
    <button type="button" class="mt-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahMember"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Member</button>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
      Launch static backdrop modal
    </button> -->
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>
  <!-- Modal -->
  <div class="modal fade" id="tambahMember" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="<?= base_url('admin/member'); ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username'); ?>" placeholder="Username anda...">
              <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="telp">No. Telepon</label>
              <input type="text" class="form-control" max="12" name="telp" id="telp" value="<?= set_value('telp'); ?>" placeholder="08xxxxxxxxxx">
              <?= form_error('telp', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="kitas">Kartu Identitas</label>
              <select class="form-control" id="kitas" name="kitas">
                <option>KTP</option>
                <option>KTM</option>
                <option>SIM</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama'); ?>" placeholder="Nama lengkap">
              <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="nokitas">Nomor Identitas</label>
              <input type="text" class="form-control" name="nokitas" id="nokitas" value="<?= set_value('nokitas'); ?>" placeholder="Nomor identitas">
              <?= form_error('nokitas', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Identitas</label>
              <input type="text" class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat'); ?>" placeholder="Alamat sesuai identitas">
              <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="password1">Password</label>
              <input type="password" class="form-control" name="password1" id="password1">
              <?= form_error('password1', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="password2">Konfirmasi Password</label>
              <input type="password" class="form-control" name="password2" id="password2">
              <?= form_error('password2', '<small class="text-danger pl-2">', '</small>') ?>
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
              <th>Username</th>
              <th>Nama</th>
              <th>No Telp</th>
              <th>Alamat</th>
              <th>Tanggal Daftar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Username</th>
              <th>Nama</th>
              <th>No Telp</th>
              <th>Alamat</th>
              <th>Tanggal Daftar</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>anandanurj</td>
              <td>Ananda Nur Juliansyah</td>
              <td>085257256782</td>
              <td>Surabaya</td>
              <td>04/03/2020</td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail">Detail</a></td>
            </tr>
            <tr>
              <td>bayufajariyanto</td>
              <td>Bayu Fajariyanto</td>
              <td>083851350939</td>
              <td>Pasuruan</td>
              <td>04/03/2020</td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail">Detail</>
              </td>
            </tr>
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
<!-- Modal -->
<div class="modal fade" id="detail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Data Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="nama" readonly>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" readonly>
        </div>
        <div class="form-group">
          <label for="telp">No. Telepon</label>
          <input type="number" class="form-control" name="telp" id="telp" readonly>
        </div>
        <div class="form-group">
          <label for="kitas">Kartu Identitas</label>
          <select class="form-control" id="kitas" name="kitas" readonly>
            <option>KTP</option>
            <option>KTM</option>
            <option>SIM</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nokitas">Nomor Identitas</label>
          <input type="number" class="form-control" name="nokitas" id="nokitas" readonly>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Identitas</label>
          <input type="text" class="form-control" name="alamat" id="alamat" readonly>
        </div>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMember">Edit</button> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Oke</button>
      </div>
    </div>
  </div>
</div>