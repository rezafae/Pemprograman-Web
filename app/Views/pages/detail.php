<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $detail['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $detail['nama']; ?></h5>
                            <p class="card-text"><?= $detail['deskripsi']; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $detail['harga']; ?></small></p>
                            <a href="/produk/index" class="btn btn-dark">Kembali</a>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>