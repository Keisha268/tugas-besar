<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tubes extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_prasarana'      => 'Ruang Komputer',
                'daya_tampung'       => 30,
                'luas_ruang'         => 60,
                'status_kepemilikan' => 'M',
                'status_lisensi'     => 'L',
                'perangkat'          => 'PC, Printer',
                'link_bukti'         => 'http://example.com/bukti1'
            ],
            [
                'nama_prasarana'      => 'Ruang kelas',
                'daya_tampung'       => 30,
                'luas_ruang'         => 60,
                'status_kepemilikan' => 'M',
                'status_lisensi'     => 'L',
                'perangkat'          => 'kursi, meja',
                'link_bukti'         => 'http://example.com/bukti2'
            ]
        ];

        
        $this->db->table('tubes')->insertBatch($data);
    }
}
