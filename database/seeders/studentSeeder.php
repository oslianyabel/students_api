<?php

namespace Database\Seeders;

use App\Models\matter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::create([
            'name' => 'Osliani',
            'last_name' => 'Figueiras',
            'email' => 'oslianyabel@gmail.com',
            'credits' => '168',
            'semester' => 6,
            'average' => 4.4,
        ]);
        student::create([
            'name' => 'Gelsy',
            'last_name' => 'Cadalso',
            'email' => 'gelsyl@gmail.com',
            'credits' => '168',
            'semester' => 6,
            'average' => 4.4,
        ]);
    }
}
