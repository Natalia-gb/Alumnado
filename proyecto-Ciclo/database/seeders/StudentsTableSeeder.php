<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'dni' => '47433952V',
            'name' => 'Alejandro',
            'phone' => '645457730',
            'address' => 'C/ Cuevas de San Marcos'
        ]);

        DB::table('students')->insert([
            'dni' => '44563335P',
            'name' => 'Natalia',
            'phone' => '67554321',
            'address' => 'C/ Cervantes'
        ]);
    }
}
