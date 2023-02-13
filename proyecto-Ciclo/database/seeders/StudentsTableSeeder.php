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
            'name' => 'Alejandro López',
            'phone' => '645457730',
            'address' => 'C/ Cuevas de San Marcos'
        ]);

        DB::table('students')->insert([
            'dni' => '44563335Y',
            'name' => 'Natalia Gómez',
            'phone' => '67554321',
            'address' => 'C/ Cervantes'
        ]);

        DB::table('students')->insert([
            'dni' => '2314565I',
            'name' => 'Laura Cabezas',
            'phone' => '89764369',
            'address' => 'Avda. Moris Marrodán'
        ]);

        DB::table('students')->insert([
            'dni' => '44562384T',
            'name' => 'Alejandro Torres',
            'phone' => '675349321',
            'address' => 'C/ Cervatillo'
        ]);

        DB::table('students')->insert([
            'dni' => '12398786A',
            'name' => 'Raúl Medina',
            'phone' => '31254678',
            'address' => 'C/ Cervateño'
        ]);

        DB::table('students')->insert([
            'dni' => '463466935S',
            'name' => 'Juan',
            'phone' => '674625637',
            'address' => 'C/ Cervatinto'
        ]);

        DB::table('students')->insert([
            'dni' => '54235735H',
            'name' => 'Alex Ghenovicci',
            'phone' => '635435456',
            'address' => 'C/ Cervantén'
        ]);

        DB::table('students')->insert([
            'dni' => '89765752H',
            'name' => 'Fabio Paulano',
            'phone' => '90895427',
            'address' => 'C/ Cervapaco'
        ]);

        DB::table('students')->insert([
            'dni' => '89067543O',
            'name' => 'Ricardo Rodríguez',
            'phone' => '12354678',
            'address' => 'C/ Cervaprix'
        ]);
    }
}
