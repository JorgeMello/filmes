<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FilmesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nome' => 'Filme 1',
            ],
            [
                'nome' => 'Filme 2',
            ],
            [
                'nome' => 'Filme 3',
            ],
            [
                'nome' => 'Filme 4',
            ],
        ];
        $this->db->table('filmes')->insertBatch($data);
    }
}
