<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\sede;
use App\Models\area;
use App\Models\ficha;
use App\Models\ambiente_formacion;
use App\Models\red_tematica;
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
                'id'=> null,
                'descripcion'=>'Tecnologia',
                
            ],
              
            [
                'id'=> null,
                'descripcion'=>'Contabilidad',
                
                
            ],
            [  
                'id'=>null,
                'descripcion'=>'Comercio',
                
                
            ]]
        
        );
   
        Sede::insert([
            [
                'nombre_sede'=>'Centro Industrial Empresarial',
                'direccion'=>'Calle 31a'
                
                
            ],
              
            [
                'nombre_sede'=>'Sibate',
                'direccion'=>'Calle 23a #12'
                
                
            ],
            [  
                'nombre_sede'=>'Uniminuto',
                'direccion'=>'Calle 30b #10'
                
                
            ]]
        
        );
        // ambiente_formacion::insert([
        //     [
        //         'aforo'=>'25',
        //      'id_ambiente'=>'205',
        //      'id_area'=>'1',
            
        //      'id_sede'=>'01'

        //     ],
        //     [
        //          'aforo'=>'20',
        //         'id_ambiente'=>'101',
        //         'id_area'=>'1',
               
        //         'id_sede'=>'01'

        //     ],
        //     [
        //           'aforo'=>'25',
        //         'id_ambiente'=>'201',
        //         'id_area'=>'1',
              
        //         'id_sede'=>'01'
        //     ],
        //    ]
        //     );
    //       area::insert([
    //            'descripcion'=>'software'
    //       ]);

          
    //       ficha::insert([
    //         'num_ficha'=>'2515397',
    //         ' cant_aprend'=>'25',
    //          'cadena_formacion'=>'true',
    //          'trismestre'=>'4',
    //          'inicio_formacion'=>'software',
    //          'fin_formacion'=>'software',
    //          'estado'=>'tru',
    //          'id_jornada'=>'1',
    //          'codigo_prog'=>'software'
    //    ]);
         
     
    }
}
