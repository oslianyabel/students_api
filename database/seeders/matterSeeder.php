<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\matter;


class matterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        matter::create([
            'name' => 'algebra',
            'credits' => 2,
            'schedule' => 60,
        ]);
        matter::create([
            'name' => 'probabilities',
            'credits' => 2,
            'schedule' => 55,
        ]);
    }
}
