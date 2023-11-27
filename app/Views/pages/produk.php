<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Produk</h1>
            <a href="/produk/input" class="btn btn-dark mt-3">Tambah Produk</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success mt -3" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">KODE</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <th scope="row"><?= $p['kode']; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['harga']; ?></td>
                            <td>
                                <a href="/produk/detail/<?= $p['kode']; ?>" class="btn btn-dark">Detail</a>
                                <a href="/produk/edit/<?= $p['kode']; ?>" class="btn btn-warning">Edit</a>
                                <a href="/produk/delete/<?= $p['kode']; ?>" class="btn btn-danger" onclick="return confirm('apakah yakin akan hapus <?= $p['kode']; ?>');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>