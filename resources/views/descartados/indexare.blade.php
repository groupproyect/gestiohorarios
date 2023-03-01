@extends("../plantillas/tablas")
@section('inicial_titulo','Tablas_areas')
@section('titulo')
<th colspan="2">
   Mostrar Areas
</th>
@endsection
@section('encabezado_tabla')
            <th>ID</th>
			<th>Nombre de area</th>
@endsection
@section('contenido_tabla')
		@foreach($muareS as $reS)
            <tr>
                <th>{{$re->id}}</th> 
                <th>{{$re->descripcion}}</th>
			</tr>
        @endforeach
	
@endsection