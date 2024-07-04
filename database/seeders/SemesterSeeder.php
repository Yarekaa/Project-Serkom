<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemesterSeeder extends Seeder
{
    // Menambahkan data ke dalam tabel semester
    public function run(): void
    {
        Semester::create([
            'nama' => 'Semester 1',
            'ipk' => '3.5',
        ]);
        
        Semester::create([
            'nama' => 'Semester 2',
            'ipk' => '4.0',
        ]);

        Semester::create([
            'nama' => 'Semester 3',
            'ipk' => '3.1',
        ]);

        Semester::create([
            'nama' => 'Semester 4',
            'ipk' => '2.5',
        ]);

        Semester::create([
            'nama' => 'Semester 5',
            'ipk' => '3.7',
        ]);

        Semester::create([
            'nama' => 'Semester 6',
            'ipk' => '2.8',
        ]);

        Semester::create([
            'nama' => 'Semester 7',
            'ipk' => '2.2',
        ]);

        Semester::create([
            'nama' => 'Semester 8',
            'ipk' => '3.9',
        ]);
    }
}
