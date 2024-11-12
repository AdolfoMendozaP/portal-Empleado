<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamento')->insert([
            [
                'IDdepartamento' => '1', 
                'nombreDep' => 'Gerencia', 
            ],
            [
                'IDdepartamento' => '2', 
                'nombreDep' => 'Proyectos', 
            ],
            [
                'IDdepartamento' => '3', 
                'nombreDep' => 'Recursos Humanos', 
            ],
            [
                'IDdepartamento' => '4', 
                'nombreDep' => 'Marketing', 
            ],
            [
                'IDdepartamento' => '5', 
                'nombreDep' => 'Ventas', 
            ],
            [
                'IDdepartamento' => '6', 
                'nombreDep' => 'Legal', 
            ],
            [
                'IDdepartamento' => '7', 
                'nombreDep' => 'Finanzas', 
            ],
            [
                'IDdepartamento' => '8', 
                'nombreDep' => 'Contabilidad', 
            ],
            [
                'IDdepartamento' => '9', 
                'nombreDep' => 'TI', 
            ],
            [
                'IDdepartamento' => '10', 
                'nombreDep' => 'Psicologia', 
            ],
            [
                'IDdepartamento' => '11', 
                'nombreDep' => 'Calidad', 
            ],
            [
                'IDdepartamento' => '12', 
                'nombreDep' => 'Nutricion', 
            ],
        ]);
    }
}
