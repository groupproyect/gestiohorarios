@extends("../plantillas/vistas")
@section('inicial_titulo','Ficha')
<div id="titulo">       
    @section('titulo')
    <h3>Ficha</h3>
</div>
@section('contenido_cuadritos')
<div id="caja_central">  
	@foreach($info as $f)
            
    <div class="background"> 
                <div class="texto_cuadritos">
                    <h1>{{$f->num_ficha}}</h1> 
                    <h1>{{$f->codigo_prog}}</h1> 
                    <h1>{{$f->cant_aprend}}</h1> 
                    <h1>{{$f->cadena_formacion}}</h1> 
                    <h1>{{$f->trimestre}}</h1> 
                    <h1>{{$f->inicio_formacion}}</h1> 
                    <h1>{{$f->fin_formacion}}</h1> 
                    <h1>{{$f->id_jornada}}</h1>
                    <h1>{{$f->estado}}</h1>  
        
       
    @endforeach
</div>

<div id="agregarimg">
            <a href="{{route('crear_ficha')}}"><img src="..\resources\img\agregar.png" alt="icono de agregar"></a>
 </div>

@endsection
