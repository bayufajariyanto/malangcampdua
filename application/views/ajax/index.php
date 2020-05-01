<select class="form-control" id="barang" name="barang" size="5">
    <?php foreach ($barang as $b) : 
    // if($b['kategori'] == $k['nama']):
    ?>
    <option value="<?= $b['id']; ?>"><?= $b['nama'] ?> (<p>Rp. <?= $b['harga'] ?></p>) | <?= $b['stok'] ?> buah</option>
    <?php 
    // endif;
    endforeach; ?>
</select>