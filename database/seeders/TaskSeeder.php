<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('tasks')->insert([
                'title' => '胸',
                'description' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
