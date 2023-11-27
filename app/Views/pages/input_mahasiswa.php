<?php

use CodeIgniter\Filters\CSRF;
?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">FORM TAMBAH MAHASISWA</h2>

            <form action="/pointnim/simpan" method="post">
                <!-- csrf berfungsi untuk menjaga keamanan form -->
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="kode" class="col-sm-2 col-form-label">KODE</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kegiatan" class="col-sm-2 col-form-label">KEGIATAN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kegiatan" name="kegiatan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">TANGGAL</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="point" class="col-sm-2 col-form-label">POINT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="point" name="point">
                    </div>
                </div>

                <button type="submit" class="btn btn-dark">SIMPAN</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>