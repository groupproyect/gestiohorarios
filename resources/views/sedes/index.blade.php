@extends("../plantillas/areas")
@section('inicial_titulo','Sedes')
@section('titulo')
<div id="titulo">       
    @section('titulo')
    <h3>Sedes</h3>
</div>
@section('contenido_cuadritos')
<div id="caja_central">  
	@foreach($sed as $s)
                
        <div class="cuadritos">   
            <div class="texto_cuadritos">
                <h1>{{$s->nombre_sede}}</h1> 
                <h1>{{$s->direccion}}</h1> 
          
                <div id="editarimg">
                    <div class="editarimg1">
                        <a href="{{route('editar_sede',$s->id)}}">
                            <img src="..\resources\img\editar.png" alt="icono de editar">
                        </a>
                    </div> 
                    <th>
                <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_sede', $s->id)}}" method="POST">
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
            <a href="{{route('crear_sede')}}"><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
    
        </div>
        
@endsection
     





