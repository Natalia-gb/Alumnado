<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'name' => 'Desarrollo web en entorno servidor',
            'credits' => '84',
            'weeklyHours' => '8'
        ]);

        DB::table('modules')->insert([
            'name' => 'Desarrollo web en entorno cliente',
            'credits' => '63',
            'weeklyHours' => '6'
        ]);

        DB::table('modules')->insert([
            'name' => 'Despliegue de aplicaciones web',
            'credits' => '31.5',
            'weeklyHours' => '3'
        ]);

        DB::table('modules')->insert([
            'name' => 'Diseño de interfaces web',
            'credits' => '63',
            'weeklyHours' => '6'
        ]);

        DB::table('modules')->insert([
            'name' => 'Empresa e iniciativa emprendedora',
            'credits' => '42',
            'weeklyHours' => '4'
        ]);

        DB::table('modules')->insert([
            'name' => 'Formación en centros de trabajo',
            'credits' => '185',
            'weeklyHours' => '0'
        ]);

        DB::table('modules')->insert([
            'name' => 'Horas de libre configuración',
            'credits' => '31',
            'weeklyHours' => '3'
        ]);

        DB::table('modules')->insert([
            'name' => 'Proyecto de desarrollo de aplicación web',
            'credits' => '20',
            'weeklyHours' => '0'
        ]);
    }
}
