<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'   => 'admin',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'name'       => 'Administrator',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'user1',
                'password'   => password_hash('user123', PASSWORD_DEFAULT),
                'name'       => 'User Satu',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
