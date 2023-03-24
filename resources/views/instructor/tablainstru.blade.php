@extends("../plantillas/tablas")
@section('inicial_titulo','Tablas_sedes')
@section('titulo')
<th colspan="10">
   Mostrar Sedes
</th>
@endsection
@section('encabezado_tabla')
            <th>ID</th>
			<th>LIDER</th>
           <th>CANTIDAD MOMENTOS</th>
           <th>FINALIZACION DE CONTRATO</th>
           <th>ESTADO</th>
           <th>ID AREA</th>
           <th>NUMERO DOC</th>
           <th>ID CONTRATO</th>
           <th>Editar</th>
           <th>Eliminar</th>

@endsection
@section('contenido_tabla')
         
    @foreach($use as $s)
            <tr>
                <th>{{$s->id}}</th>
                <th>{{$s->lider}}</th> 
                <th>{{$s->cant_momentos}}</th>
                <th>{{$s->finalizacion_contrato}}</th>
                <th>{{$s->estado}}</th>
                <th>{{$s->id_area}}</th>
                <th>{{$s->num_doc}}</th>
                <th>{{$s->id_contrato}}</th>
                <th>  <div id="editarimg">
                    <div class="editarimg1">
                        <img src="..\resources\img\editar.png" alt="icono de editar"  title="Editar" >
                    </div>
                    
                </div></th>
                <th> <div id="papeleraimg">
                     <div class="papeleraimg1">
                     <td>
                     <form action="{{route('eliminar_instructor', $instructor->num_doc)}}" method="POST">
                        @csrf
                       @method('delete')

                       <button type="submit" class="boton" onclick="return alert()"><img src="..\resources\img\papelera.png" alt="icono de eliminar" title="Eliminar" ></button> </div> 
                   </form>
                  </td>
                </div></th>
    
     @endforeach
    @endsection 
    @section('agregar')
        <div id="agregarimg">
            <a href="{{route('crear_instructor')}}"><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
    
        </div>
    endsection 

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