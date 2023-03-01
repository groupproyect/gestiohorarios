@extends("../plantillas/areas")
@section('inicial_titulo','Areas')  
<div id="titulo">       
    @section('titulo')
    <h3>Areas</h3>
</div>
@section('contenido_cuadritos')
<div id="caja_central">  
	@foreach($muare as $re)
                
        <div class="cuadritos">   
            <div class="texto_cuadritos">
                <h1>{{$re->descripcion}}</h1> 
                <h1>Ficha</h1>
                <div id="editarimg">
                    <div class="editarimg1">
                    <a href="{{route('editar_area',$re->id)}}">
                        <img src="..\resources\img\editar.png" alt="icono de editar">
                    </a>
                    </div>
                    
                </div>

                <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_area', $re->id)}}" method="POST">
                        @csrf
                       @method('delete')

                       <button type="submit" class="boton"><img src="..\resources\img\papelera.png" alt="icono de eliminar"></button> </div> 
                   </form>
                  </td>
                   </div>
                </div>
            </div>
        
    @endforeach
</div>
</div>
    <div id="agregarimg">
        <a href="{{route('crear_area')}}" ><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
    </div>
	
@endsection
                
 