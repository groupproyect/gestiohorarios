@extends("../plantillas/formulario")
@section('titulo_pagina', '{{ $titulo }}')
@section('titulo')
    {{$titulo}}
@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@section('formulario')
    <form action="{{$cod}}" method="post" >

        @csrf
        @if(empty($informacion))
            <label>
                <h4>Nombre sede</h4> 
                <input type="text" class="form-control @error('nombre_sede') is-invalid @enderror" name="nombre_sede" value="{{ old('nombre_sede') }}">
              @error('nombre_sede')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </label>
            <br>
                <label>
                    <h4>Direccion</h4> 
                    <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}">
                    @error('direccion')
                    <span class="invalid-feedback">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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

