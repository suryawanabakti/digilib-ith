<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fakultas;
use App\Models\Literatur;
use App\Models\LiteraturKontributor;
use App\Models\Prodi;
use App\Models\User;
use Database\Factories\LiteraturFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $fakultas = Fakultas::create([
            'nama' => 'Teknik',
        ]);

        $prodi = Prodi::create([
            'nama' => 'Tekhnik Informatika',
            'fakultas_id' => $fakultas->id,
        ]);

        $prasetya = User::create([
            'nama' => 'Prasetya abdi putra',
            'nim_nip' => 'C123123',
            'password' => bcrypt('password'),
            'role' => 'mahasiswa',
            'prodi_id' => $prodi->id,
        ]);

        $profAnsar = User::create([
            'nama' => 'Prof. Anshar',
            'nim_nip' => '737114020998005',
            'password' => bcrypt('password'),
            'role' => 'dosen',
            'prodi_id' => $prodi->id,
        ]);

        User::create([
            'nama' => 'Admin',
            'nim_nip' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'prodi_id' => null,
        ]);

        \App\Models\Literatur::factory(50)->create()->each(function ($literatur) use ($profAnsar) {
            LiteraturKontributor::create([
                'literatur_id' => $literatur->id,
                'user_id' => $profAnsar->id, // dosen,
            ]);
        });
    }
}
