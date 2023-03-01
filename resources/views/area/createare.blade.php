@extends("../plantillas/formulario")
@section('titulo_pagina', '{{ $titulo }}')
@section('titulo')
    {{$titulo}}
@endsection
@section('formulario')
    <form action="{{$cod}}" method="post"> 
        @csrf
        @if(empty($informacion))
            <label>
                <h4>Nombre de area</h4>
                <input type="text" name="descripcion">
            </label>
            
        @else
            @foreach($informacion as $key)
            <label>
                
                <h4>Nombre de area</h4>
                <input type="text" name="descripcion" placeholder="{{$key->descripcion}}" value="{{$key->descripcion}}">
                <input type="hidden" name="id" value="{{$key->id}}">
            </label>    
            
            @endforeach
            
        @endif
    
        <input type="submit" class="boton" name="guardar" value="Enviar">

    </form>
@endsection