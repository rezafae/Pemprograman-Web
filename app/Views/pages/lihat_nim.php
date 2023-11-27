<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">LIHAT NIM</h1>
            <!-- <a href="/produk/input" class="btn btn-dark mt-3">Tambah Produk</a> -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success mt -3" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">KODE</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">KEGIATAN</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">POINT</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($point as $p) : ?>
                        <tr>
                            <th scope="row"><?= $p['kode']; ?></th>
                            <td><?= $p['nim']; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['kegiatan']; ?></td>
                            <td><?= $p['tanggal']; ?></td>
                            <td><?= $p['point']; ?></td>
                            <!-- <td><a href="/lihat_nim/<?= $p['kode']; ?>" class="btn btn-dark">Detail</a></td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>