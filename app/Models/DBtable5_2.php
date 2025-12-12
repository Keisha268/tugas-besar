<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtable5_2 extends Model
{
    protected $table            = 'tubes';
    protected $primaryKey       = 'id';

    protected $returnType       = 'array';
    protected $useTimestamps    = true;

    protected $allowedFields = [
        'nama_prasarana',
        'daya_tampung',
        'luas_ruang',
        'status_kepemilikan',
        'status_lisensi',
        'perangkat',
        //'kolom7', //hapus ini
        'link_bukti'
    ];
}
