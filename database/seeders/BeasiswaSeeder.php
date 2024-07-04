<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeasiswaSeeder extends Seeder
{
    // Menambahkan data ke dalam tabel beasiswa
    public function run(): void
    {
        Beasiswa::create([
            'nama' => 'Beasiswa Akademis',
            'deskripsi' => 'Beasiswa Akademis diberikan kepada mahasiswa yang mencapai prestasi akademis tinggi.',
        ]);
        
        Beasiswa::create([
            'nama' => 'Beasiswa Prestasi & Bakat',
            'deskripsi' => 'Beasiswa Prestasi & Bakat diberikan kepada mahasiswa yang memiliki prestasi di luar kegiatan akademis, seperti olahraga, seni, atau bidang lainnya.',
        ]);

        Beasiswa::create([
            'nama' => 'Beasiswa Riset & Penelitian',
            'deskripsi' => 'Beasiswa Riset & Penelitian disediakan bagi mahasiswa yang tertarik untuk melakukan penelitian akademis.',
        ]);
    }
}
