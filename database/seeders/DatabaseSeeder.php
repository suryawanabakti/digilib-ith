<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fakultas;
use App\Models\Literatur;
use App\Models\LiteraturKontributor;
use App\Models\Prodi;
use App\Models\User;
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
            'role' => 'dosen',
            'prodi_id' => null,
        ]);

        $literatur1 = Literatur::create([
            'user_id' => $prasetya->id,
            'judul' => 'Perancangan Aplikasi Digilib ITH',
            'abstrak' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem ducimus quam dicta voluptatibus iusto, maiores odio. Expedita, laudantium, possimus earum delectus iste placeat unde repellendus nesciunt ex alias, voluptatibus ratione pariatur vitae dolore hic. Quasi, sunt? Quam quidem et magnam? Repellat aut illo maiores quam suscipit. Autem repellendus totam quod minus voluptatibus modi atque tempora provident impedit, optio aliquam quasi alias vitae quam quo rem in ab aspernatur incidunt sunt. Optio voluptas dicta, laudantium consequatur placeat dolore nihil perspiciatis mollitia atque culpa quia! Quae vel eveniet officia, debitis aliquam, quasi beatae sapiente sed sit aperiam aspernatur recusandae numquam. Quo ad tempora aperiam sunt doloribus corrupti natus deserunt totam id rerum, dicta assumenda omnis cupiditate quasi eius maxime eveniet quae. Sed totam ducimus suscipit corporis eligendi illo officia illum, atque sint hic. Ipsa eligendi adipisci delectus optio reiciendis modi pariatur iusto, omnis quibusdam, cum natus impedit facere sint earum qui amet vero illum porro, nostrum nam provident? Itaque in a, voluptatem repudiandae veritatis deserunt, dolorum quam totam eum mollitia beatae blanditiis sunt voluptas perferendis repellat suscipit vitae fuga autem expedita aperiam ducimus fugiat? Officiis enim repellat beatae harum, perferendis qui pariatur! Accusantium laudantium explicabo quasi ullam ab numquam. Veniam, error saepe!',
            'keyword' => 'Dolore, ullam, voluptas',
            'jenis_koleksi' => 'tugas akhir',
            'file' => 'tester.pdf'
        ]);

        LiteraturKontributor::create([
            'literatur_id' => $literatur1->id,
            'user_id' => $profAnsar->id, // dosen,
        ]);
    }
}
