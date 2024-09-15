<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas=[
            [
                'task_id'=>1,
                'name'=>'プッシュアップ',
                'description'=>'',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'task_id'=>1,
                'name'=>'ベンチプレス',
                'description'=>'',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ];
        
        foreach($datas as $data){
            DB::table('trainings')->insert($data);
        }
    }
}
