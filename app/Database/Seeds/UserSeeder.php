<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_BCRYPT),
                'name'    => 'Administrator',
                'role'    => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'staff',
                'password' => password_hash('staff123', PASSWORD_BCRYPT),
                'name'    => 'Staff Member',
                'role'    => 'staff',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'manajer',
                'password' => password_hash('manajer123', PASSWORD_BCRYPT),
                'name'    => 'Manager Person',
                'role'    => 'manajer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Using query builder
        $this->db->table('users')->ignore(true)->insertBatch($data);
    }
}
