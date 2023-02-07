<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->insert([
            'DNI' => '47433952V',
            'idModule' => '1',
            'note' => 8.0,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'DNI' => '44563335P',
            'idModule' => '2',
            'note' => '6',
            'evaluationDate' => '2022-12-22'
        ]);
    }
}