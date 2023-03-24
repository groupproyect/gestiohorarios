@extends("../plantillas/areas")
@section('inicial_titulo','Areas')  
<div id="titulo">       
    @section('titulo')
    <h3>Areas</h3>
</div>
                

@section('contenido_cuadritos')
<div id="caja_central">
 
	@foreach($muare as $re)
 
  
    <div class="background">
            <div class="texto_cuadritos">
                <h1>{{$re->descripcion}}</h1> 
                <h1>Ficha</h1>
                <div id="editarimg">
                    <div class="editarimg1">
                    <a href="{{route('editar_area',$re->id)}}">
                        <img src="..\resources\img\editar.png" alt="icono de editar"  title="Editar" >
                    </a>
                    </div>
                    
                </div>

                <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_area', $re->id)}}" method="POST">
                        @csrf
                       @method('delete')

                       <button type="submit" class="boton" onclick="return alert()"><img src="..\resources\img\papelera.png" alt="icono de eliminar" title="Eliminar" ></button> </div> 
                   </form>
                  </td>
                </div>
                <div id="horarioimg">
                    <div class="horarioimg1">
                    <a href="{{route('horario',$re->id)}}">
                        <img src="..\resources\img\calendario.png" alt="icono horario" title="Horario">
                    </a>
                    </div>
                    
                </div>

                </div>
            </div>
 
    @endforeach
</div>





    <div id="agregarimg">
        <a href="{{route('crear_area')}}" ><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
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
                
 