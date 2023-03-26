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
/*
use App\Models\nivel_formacion;
use App\Models\jornada;*/
use App\Models\User;
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
                'id'=> 3,
                'nombre_sede'=>'Uniminuto',
                'direccion'=>'Calle 30b #10'
                
                
            ]]
        
        );
        area::insert([
            'id'=>1,
            'id_red'=> 1,
            'descripcion'=>'software'
       ]);

        
        ambiente_formacion::insert([
            [

             'aforo'=>25,
             'id_ambiente'=>'205',
             'id_area'=>1,
            
             'id_sede'=>1

            ],
            [
                 'aforo'=>20,
                'id_ambiente'=>'101',
                'id_area'=>1,
               
                'id_sede'=>1

            ],
            [
                  'aforo'=>25,
                'id_ambiente'=>'201',
                'id_area'=>1,
              
                'id_sede'=>1
            ],
           ]
            );

          tipo_contrato::insert([
            'id'=>2,
            'descripcion'=>'contrato fijo',
            'cant_momentos'=>6,
          ]);
            persona::insert([
                'num_doc'=>'5773953563',
                'nombres'=>'Arlenys Carolina',
                'apellidos'=>'Nieves',
                'correo'=>'arle@gmail.com'
            ],[
                'num_doc'=>'5373953563',
                'nombres'=>'Samuel ',
                'apellidos'=>'Padilla',
                'correo'=>'samuel@gmail.com'
            ]
        
            );
            instructor::insert([
            'id'=>1,
            'lider'=>0,
            'cant_momentos'=>6,
            'finalizacion_contrato'=>'24/09/2023',
             'estado'=>1,
             'id_area'=>1,
             'num_doc'=>'5773953563',
             'id_contrato'=>2,
            
            ],[
                'id'=>2,
                'lider'=>0,
                'cant_momentos'=>8,
                'finalizacion_contrato'=>'30/09/2024',
                'estado'=>1,
                'id_area'=>1,
                'num_doc'=>'5373953563',
                'id_contrato'=>1,
            ]);
                
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => 'holamundo1234'
            ]);
                 
            User::factory()->create([
                'name' => 'ccoordinador',
                'email' => 'coordinador@cide.com',
                'password' => 'soylomejor'
            ]);
            User::factory()->create([
                'name' => 'ximena',
                'email' => 'ximena171531@gmail.com',
                'password' => 'mena'
            ]);

    }
    }
