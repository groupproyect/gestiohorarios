@extends("../plantillas/vistas")
@section('inicial_titulo','Programa de formación')
<div id="titulo">       
    @section('titulo')
    <h3>Programa de formación</h3>
</div>
@section('contenido_cuadritos')
<div id="caja_central">  
	@foreach($tat as $e)
            
    <div class="background"> 
                <div class="texto_cuadritos">
                    <h1>{{$e->codigo_prog}}</h1> 
                    <h1>{{$e->nombre}}</h1>
                    <h1>{{$e->version}}</h1>
                    <h1>{{$e->duracion}}</h1>
                    <h1>{{$e->id_area}}</h1> 
                    <h1>{{$e->id_niv_formacion}}</h1> 
                    <div id="editarimg">
                        <div class="editarimg1">
                        <a href="{{route('editar_programaformacion',$e->codigo_prog)}}">
                            <img src="..\resources\img\editar.png" alt="icono de editar">
                        </a>
                        </div>
                        
                    </div>

                    <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_programaformacion', $e->codigo_prog)}}" method="POST">
                        @csrf
                       @method('delete')

                       <button type="submit" class="boton" onclick="return alert()"><img src="..\resources\img\papelera.png" alt="icono de eliminar"></button> </div> 
                   </form>
                  </td>
                   </div>
                </div>
            </div>
        
       
    @endforeach
</div>



        <div id="agregarimg">
            <a href="{{route('crear_programaformacion')}}"><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
        </div>
        
    @endsection
    @section('js')
    <script>
        /*------------------------------------------
           Esta es una funcion para las alertas 
           de eliminacion en un registro 
        -------------------------------------------*/
        function alert(){
            var resultado = window.confirm('Estas seguro de eliminar?');
          if (resultado === true) {
               return true;
             
            } else { 
               return false;
            }
        }
     </script>
     @endsection
     
     


