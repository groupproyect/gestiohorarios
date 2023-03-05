@extends("../plantillas/areas")
@section('inicial_titulo','Ambiente')
<div id="titulo">       
    @section('titulo')
    <h3>Ambientes</h3>
</div>
@section('contenido_cuadritos')
<div id="caja_central">  
	@foreach($info as $e)
            
    <div class="background"> 
                <div class="texto_cuadritos">
                    <h1>{{$e->id_ambiente}}</h1> 
                    <h1>{{$e->id_area}}</h1> 
                    <h1>{{$e->aforo}}</h1> 
                    <h1>{{$e->id_sede}}</h1> 
                    <div id="editarimg">
                        <div class="editarimg1">
                        <a href="{{route('editar_ambiente',$e->id_ambiente)}}">
                            <img src="..\resources\img\editar.png" alt="icono de editar">
                        </a>
                        </div>
                        
                    </div>

                    <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_ambiente', $e->id_ambiente)}}" method="POST">
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



        <div id="agregarimg">
            <a href="{{route('crear_ambiente')}}"><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
        </div>
        
    @endsection
     


