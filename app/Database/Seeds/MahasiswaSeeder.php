<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;


class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 10; $i++) {
          $newData = [
            'image'    => "default.jpg",
            'nama' => $faker->name(),
            'npm'    => $faker->randomNumber(9, true),
            'prodi'    => 'Informatika',
            'created_at'    =>  $faker->date(),
          ];
          $data[] = $newData;
        }
          $this->db->table('mahasiswa')->insertBatch($data);
    }
}
