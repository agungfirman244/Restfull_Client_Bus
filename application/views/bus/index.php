<div class="container">
  

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>bus/tambah" class="btn btn-primary">Tambah
                Data Bus</a>
        </div>
    </div>

    

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Bus</h3>
            <?php if (empty($bus)) : ?>
                <div class="alert alert-danger" role="alert">
                data bus tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($bus as $bs) : ?>
                <li class="list-group-item">
                    <?= $bs['no_polis']; ?> <td>:</td> <?= $bs['kelas']; ?>
                    <a href="<?= base_url(); ?>bus/hapus/<?= $bs['id_bus']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>bus/ubah/<?=$bs['id_bus']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>bus/detail/<?= $bs['id_bus']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>