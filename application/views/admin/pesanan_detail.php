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
            <br>
            <div class="row">
                <p class="col-sm-2">Kode Transaksi</p>
                <div class="col-sm-10">
                    <h5 class="card-title"><?= $pesanan['kode_transaksi'] ?></h5>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Nama</p>
                <div class="col-sm-10">
                    <p class="card-text">dsf</p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Barang</p>
                <div class="col-sm-10">
                    <p class="card-text">szdf</p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Jumlah Barang</p>
                <div class="col-sm-10">
                    <p class="card-text">sdf</p>
                </div>
            </div>

            <br>
            <div class="row">
                <p class="col-sm-2">Total</p>
                <div class="col-sm-10">
                <p class="card-text"><small class="text-muted">Rp. 30000 <strong>(Lunas)</strong></small></p>
                </div>
            </div>
            
            <a href="<?= base_url() ?>admin/pesanan" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->