<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CuidadorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nome' => 'Cuidador 1',
                'email' => 'teste@example.com', 
            ]
        ];
        $this->db->table('cuidador')->insertBatch($data);
    }
}
