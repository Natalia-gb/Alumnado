<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulo')->insert([
            'name' => 'Desarrollo web en entorno servidor',
            'credits' => '84',
            'weekly hours' => '8'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Desarrollo web en entorno cliente',
            'credits' => '63',
            'weekly hours' => '6'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Despliegue de aplicaciones web',
            'credits' => '31.5',
            'weekly hours' => '3'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Diseño de interfaces web',
            'credits' => '63',
            'weekly hours' => '6'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Empresa e iniciativa emprendedora',
            'credits' => '42',
            'weekly hours' => '4'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Formación en centros de trabajo',
            'credits' => '185',
            'weekly hours' => '0'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Horas de libre configuración',
            'credits' => '31',
            'weekly hours' => '3'
        ]);

        DB::table('modulo')->insert([
            'name' => 'Proyecto de desarrollo de aplicación web',
            'credits' => '20',
            'weekly hours' => '0'
        ]);
    }
}
