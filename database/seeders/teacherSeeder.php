<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;

class teacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        teacher::create([
            'name' => 'Palencia',
            'last_name' => 'Palencia',
            'phone' => '51569876',
            'email' => 'palencia@gmail.com',
            'journey' => '8h',
            'salary' => '8000'
        ]);
        teacher::create([
            'name' => 'Roberto',
            'last_name' => 'Vicente',
            'phone' => '51569877',
            'email' => 'Vicente@gmail.com',
            'journey' => '8h',
            'salary' => '8500'
        ]);
    }
}
