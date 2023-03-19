@extends("../plantillas/tablas")
@section('inicial_titulo','Tablas_sedes')
@section('titulo')
<th colspan="8">
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
                <th></th>
                <th></th>
    
     @endforeach
    @endsection 