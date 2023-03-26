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
                <h4>Codigo de programa</h4>
                <input type="text" class="form-control @error('codigo_prog') is-invalid @enderror" name="codigo_prog" value="{{ old('codigo_prog') }}">
                @error('codigo_prog')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label>
                <h4>Nombre del programa</h4>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
                        
            
            <label>
                <h4>Version</h4>
                <input type="text" class="form-control @error('version') is-invalid @enderror" name="version"  value="{{ old('version') }}">
                @error('version')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror			
            </label>
            
            <label>
                <h4>Duración</h4>
                <input type="text" class="form-control @error('duracion') is-invalid @enderror" name="duracion"  value="{{ old('duracion') }}">
                @error('duracion')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror			
            </label>
            
            <label>
                <h4>Nivel de formación</h4>
                <select class="form-control @error('id_niv_formacion') is-invalid @enderror"  name="id_niv_formacion" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($nivelformacion as $id_niv_formacion)               
                    <option value="{{$id_niv_formacion->id}}">{{$id_niv_formacion->descripcion}}</option> 
                @endforeach
                </select>
                @error('id_niv_formacion')
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



        @else
            @foreach($informacion as $key)
            <label>
                <h4>Codigo de programa</h4>
                <input type="text" name="codigo_prog" value="{{$key->codigo_prog}}" placeholder="{{$key->codigo_prog}}">
            </label>
                        
            <label>
                <h4>Nombre del programa</h4>
                <input type="text" name="nombre" value="{{$key->nombre}}" placeholder="{{$key->nombre}}">
            </label>
          
            <label>
                <h4>Version</h4>
                <input type="text" name="version" value="{{$key->version}}" placeholder="{{$key->version}}">
            </label>
            
            <label>
                <h4>Duración</h4>
                <input type="text" name="duracion"value="{{$key->duracion}}" placeholder="{{$key->duracion}}">			
            </label>
            
            
            <label>
                <h4>Nivel de formación</h4>
                <select name="id_niv_formacion" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($nivelformacion as $id_niv_formacion)               
                <option value="{{$id_niv_formacion->id}}">{{$id_niv_formacion->descripcion}}</option> 
                @endforeach
                </select>
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
            <input type="hidden" name="codigo_prog" value="{{$key->codigo_prog}}">
            @endforeach
        
        @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
        
    </form>
@endsection
