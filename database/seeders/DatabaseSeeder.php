<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\sede;
use App\Models\area;
use App\Models\ficha;
use App\Models\ambiente_formacion;
use App\Models\instructor;
use App\Models\persona;
use App\Models\red_tematica;
use App\Models\tipo_contrato;
use App\Models\nivel_formacion;
use App\Models\jornada;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        red_tematica::insert([
            [
                'id'=> 1,
                'descripcion'=>'Tecnologia',
                
            ],
              
            [
                'id'=> 2,
                'descripcion'=>'Contabilidad',
                
                
            ],
            [  
                'id'=>3,
                'descripcion'=>'Comercio',
                
                
            ]]
        
        );
   
        Sede::insert([
            [
                'id'=> 1,
                'nombre_sede'=>'Centro Industrial Empresarial',
                'direccion'=>'Calle 31a'
                
                
            ],
              
            [
                'id'=> 2,
                'nombre_sede'=>'Sibate',
                'direccion'=>'Calle 23a #12'
                
                
            ],
            [  
                'nombre_sede'=>'Uniminuto',
                'direccion'=>'Calle 30b #10'
                
                
            ]]
        
        );
        
        tipo_contrato::insert([
            [
                'descripcion' => 'planta',
                'cant_momentos' => '6'
            ],
            [
                'descripcion' => 'contrato',
                'cant_momentos' => '8'
            ]
        ]);

        nivel_formacion::insert(
            [
                [
                    'descripcion' => 'tecnologo'
                ],
                [
                    'descripcion' => 'tecnico'
                ]
            ]
        );

        jornada::insert(
            [
                [
                    'descripcion' => 'mañana'
                ],
                [
                    'descripcion' => 'tarde'
                ]
            ]
        );
        
         
     
    }
}
