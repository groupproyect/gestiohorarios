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
            
                <div id="lider">
                <form action="{{route('actualizarlider')}}" method="POST">
                        @csrf
                    <select id="instruc" name="lider" onclick="mostrarboton()">
                        @if($a3 == false)
                            <option disabled selected>debe escojer intructor lider</option>
                        @else
                            <option disabled selected>instructor lider : {{$a3->nombres}}</option> 
                        @endif
                        @foreach($a2 as $i)               
                        <option value="{{$i->id}}">{{$i->nombres}}</option> 
                        @endforeach
                        
                    </select>
                    <button type="submit"  id="guardar" onclick="ocultarboton()">guardar</button>

            
                   </form>
                    
                  
                </div>
                
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

                       <button type="submit" class="boton" onclick="return alert()"><img src="..\resources\img\papelera.png" alt="icono de eliminar"></button> </div> 
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

@section('js')

<script>
    /*-------------------------------------------------
           Esta es una funcion para las alertas 
           de eliminacion en un registro 
    ----------------------------------------------------*/
        function alert(){
            var resultado = window.confirm('Estas seguro de eliminar?');
          if (resultado === true) {
               return true;
             
            } else { 
               return false;
            }
        }
    
    /*-------------------------------------------------------------
     codigo java script mostar y ocultar instructores lideres
    --------------------------------------------------------------*/

    function mostrarboton(){
     const  lista=document.getElementById('guardar').style.display = 'block';
    }

    function ocultarboton(){
     const  lista=document.getElementById('guardar').style.display = 'none';
    }

  

</script>
@endsection 

     





