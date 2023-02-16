<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enrollments')->insert([
            'dni' => '47433952V',
            'idModule' => 1
        ]);

        DB::table('enrollments')->insert([
            'dni' => '44563335Y',
            'idModule' => 2
        ]);

        DB::table('enrollments')->insert([
            'dni' => '2314565I',
            'idModule' => 3
        ]);

        DB::table('enrollments')->insert([
            'dni' => '44562384T',
            'idModule' => 4
        ]);

        DB::table('enrollments')->insert([
            'dni' => '12398786A',
            'idModule' => 5
        ]);

        DB::table('enrollments')->insert([
            'dni' => '463466935S',
            'idModule' => 6
        ]);

        DB::table('enrollments')->insert([
            'dni' => '12398786A',
            'idModule' => 7
        ]);

        DB::table('enrollments')->insert([
            'dni' => '463466935S',
            'idModule' => 3
        ]);

        DB::table('enrollments')->insert([
            'dni' => '54235735H',
            'idModule' => 4
        ]);

        DB::table('enrollments')->insert([
            'dni' => '89765752H',
            'idModule' => 7
        ]);

        DB::table('enrollments')->insert([
            'dni' => '89067543O',
            'idModule' => 5
        ]);
    }
}
