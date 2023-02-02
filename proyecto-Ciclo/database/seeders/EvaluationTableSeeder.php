<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluation')->insert([
            'DNI' => '47433952V',
            'idModulo' => '1',
            'note' => 8.0,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluation')->insert([
            'DNI' => '44563335P',
            'idModulo' => '2',
            'note' => '6',
            'evaluationDate' => '2022-12-22'
        ]);
    }
}
