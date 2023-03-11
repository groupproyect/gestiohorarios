@extends("../plantillas/areas")
@section('inicial_titulo','Red Tematica')
@section('titulo')
<div id="titulo">       
    @section('titulo')
    <h3>Red Tematica</h3>
</div>
@section('contenido_cuadritos')
<div id="caja_central">  
	@foreach($rtm as $r)
                
    <div class="background">  
            <div class="texto_cuadritos">
                <h1>{{$r->descripcion}}</h1> 
               
          
                <div id="editarimg">
                    <div class="editarimg1">
                        <a href="{{route('editar_redtematica',$r->id)}}">
                            <img src="..\resources\img\editar.png" alt="icono de editar">
                        </a>
                    </div> 
                    <th>
                <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_redtematica', $r->id)}}" method="POST">
                        @csrf
                       @method('delete')

                       <button type="submit" class="boton"><img src="..\resources\img\papelera.png" alt="icono de eliminar"></button> </div> 
                   </form>
                  </td>
                   </div>
                </div>
            </div>
  
              
            </div>
       
    @endforeach
</div>
</div>

        <div id="agregarimg">
            <a href="{{route('crear_redtematica')}}"><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
    
        </div>
        
@endsection
     





