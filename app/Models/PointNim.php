<?php

namespace App\Models;

use CodeIgniter\Model;

class PointNim extends Model
{
    protected $table = 'nim_tabel';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['kode', 'nim', 'nama', 'kegiatan', 'tanggal', 'point'];
}
