@extends("../plantillas/formulario")
@section('titulo_pagina', '{{ $titulo }}')
@section('titulo')
    {{$titulo}}
@endsection
@section('formulario')
    <form action="{{$cod}}" method="post" >

        @csrf
        @if(empty($informacion))
            <label>
                <h4>Nombre sede</h4> 
                <input type="text" name="nombre_sede" >
            </label>
            <br>
                <label>
                    <h4>Direccion</h4> 
                    <input type="text" name="direccion">
                </label>
            <br>
        @else
            @foreach($informacion as $key)
            <label>
                <h4>Nombre sede</h4> 
                <input type="text" name="nombre_sede" placeholder="{{$key->nombre_sede}}" value="{{$key->nombre_sede}}" >
            </label>
            <br>
                <label>
                    <h4>Direccion</h4> 
                    <input type="text" name="direccion" placeholder="{{$key->direccion}}" value="{{$key->direccion}}">
                </label>
            <br>
            <input type="hidden" name="id" placeholder="{{$key->id}}" value="{{$key->id}}">
            @endforeach

        @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
    
    </form>
@endsection

