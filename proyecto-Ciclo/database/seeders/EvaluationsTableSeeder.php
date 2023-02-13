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
            'dni' => '47433952V',
            'idModule' => 1,
            'note' => 8.0,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '44563335Y',
            'idModule' => 2,
            'note' => 6,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '2314565I',
            'idModule' => 3,
            'note' => 7,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '44562384T',
            'idModule' => 4,
            'note' => 9,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '12398786A',
            'idModule' => 5,
            'note' => 7,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '463466935S',
            'idModule' => 6,
            'note' => 9.5,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '12398786A',
            'idModule' => 7,
            'note' => 6,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '463466935S',
            'idModule' => 3,
            'note' => 8,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '54235735H',
            'idModule' => 4,
            'note' => 6,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '89765752H',
            'idModule' => 7,
            'note' => 7,
            'evaluationDate' => '2022-12-22'
        ]);

        DB::table('evaluations')->insert([
            'dni' => '89067543O',
            'idModule' => 5,
            'note' => 8,
            'evaluationDate' => '2022-12-22'
        ]);
    }
}