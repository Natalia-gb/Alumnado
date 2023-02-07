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
            'dni' => '47433952',
            'idModule' => 1,
            'note' => 8.0,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '44563335',
            'idModule' => 2,
            'note' => 6,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '2314565',
            'idModule' => 3,
            'note' => 7,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '44562384',
            'idModule' => 4,
            'note' => 9,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '12398786',
            'idModule' => 5,
            'note' => 7,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '463466935',
            'idModule' => 6,
            'note' => 9.5,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '54235735',
            'idModule' => 7,
            'note' => 6,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '89067543',
            'idModule' => 3,
            'note' => 8,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '54235735',
            'idModule' => 4,
            'note' => 6,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '89765752',
            'idModule' => 7,
            'note' => 7,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '89067543',
            'idModule' => 5,
            'note' => 8,
            'evaluationDate' => '2022-12-22'
        ]);
    }
}