@extends("../plantillas/formulario")
@section('titulo_pagina','{{ $titulo }}')
@section('titulo')
    {{$titulo}}
@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@section('formulario')
    <form action="{{$cod}}" method="POST">
        @csrf

        @if(empty($informacion))    
            <label>
                <h4>Numero Ambiente</h4>
                <input type="text" class="form-control @error('id_ambiente') is-invalid @enderror" name="id_ambiente" value="{{ old('id_ambiente') }}">
                @error('id_ambiente')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
                        
        
            <label>

                <h4>Area</h4>
                <select class="form-control @error('id_area') is-invalid @enderror" name="id_area" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($areas as $id_area)               
                    <option value="{{$id_area->id}}">{{$id_area->descripcion}}</option> 
                @endforeach
                </select>
                @error('id_area')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            
            <label>
                <h4>Aforo</h4>
                <input type="text" class="form-control @error('aforo') is-invalid @enderror" name="aforo"  value="{{ old('aforo') }}">
                @error('aforo')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror			
            </label>
            
            
            <label>
                <h4>Sede</h4>
                <select class="form-control @error('id_sede') is-invalid @enderror"  name="id_sede" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($sedes as $id_sede)               
                    <option value="{{$id_sede->id}}">{{$id_sede->nombre_sede}}</option> 
                @endforeach
                </select>
                @error('id_sede')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
            
        
        @else
            @foreach($informacion as $key)
            <label>
                <h4>Numero Ambiente</h4>
                <input type="text" name="id" value="{{$key->id_ambiente}}" placeholder="{{$key->id_ambiente}}">
            </label>
                        
        
            <label>

                <h4>Area</h4>
                <select name="id_area" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($areas as $id_area)               
                    <option value="{{$id_area->id}}">{{$id_area->descripcion}}</option> 
                @endforeach
                </select>
            
            </label>

            
            <label>
                <h4>Aforo</h4>
                <input type="text" name="aforo"value="{{$key->aforo}}" placeholder="{{$key->aforo}}">			
            </label>
            
            
            <label>
                <h4>Sede</h4>
                <select name="id_sede" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($sedes as $id_sede)               
                    <option value="{{$id_sede->id}}">{{$id_sede->nombre_sede}}</option> 
                @endforeach
                </select>
            </label>
            <input type="hidden" name="id_ambiente" value="{{$key->id_ambiente}}">


            @endforeach
        
        @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
        
    </form>
@endsection
