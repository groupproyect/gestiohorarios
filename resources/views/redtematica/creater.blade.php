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
                <h4>Nombre Red Tematica</h4> 
                <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}">
              @error('descripcion')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </label>
           
        @else
            @foreach($informacion as $key)
            <label>
                <h4>Nombre red tematica</h4> 
                <input type="text" name="descripcion" placeholder="{{$key->descripcion}}" value="{{$key->descripcion}}" >
            </label>
          
            <input type="hidden" name="id" placeholder="{{$key->id}}" value="{{$key->id}}">
            @endforeach

        @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
    
    </form>
@endsection

