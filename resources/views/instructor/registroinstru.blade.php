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
                    <h4>Numero de documento</h4> 
                    <input type="text" class="form-control @error('num_doc') is-invalid @enderror" name="num_doc" value="{{ old('num_doc') }}">
                    @error('num_doc')
                    <span class="invalid-feedback">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
               
            <br>
        <br>
            <label>
                <h4>Nombres del instructor </h4> 
                <input type="text" class="form-control @error('nombre_instructor') is-invalid @enderror" name="nombre_instructor" value="{{ old('nombre_instructor') }}">
              @error('nombre_instructor')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </label>
            <br>
            <label>
                <h4>Apellidos del instructor</h4> 
                <input type="text" class="form-control @error('apellido_instructor') is-invalid @enderror" name="apellido_instructor" value="{{ old('apellido_instructor') }}">
              @error('Apellido_instructor')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </label>
            <label>
                <h4>Correo del instructor </h4> 
                <input type="text" class="form-control @error('nombre_instructor') is-invalid @enderror" name="correo_instructor" value="{{ old('correo') }}">
              @error('nombre_instructor')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
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

                    <h4>Tipo de Contrato</h4>
                    <select name="id_contrato" id="">
                        <option disabled selected>Seleccione</option> 
                    @foreach($contratos as $contrato)               
                        <option value="{{$contrato->id}}">{{$contrato->descripcion}}</option> 
                    @endforeach
                    </select>

                </label>
            <br>
            <label>
                <h4>finalizacion_contrato</h4> 
                <input type="text" class="form-control @error('finalizacion_contrato') is-invalid @enderror" name="finalizacion_contrato" value="{{ old('finalizacion_contrato') }}">
                @error('finalizacion_contrato')
                <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
        @else
            @foreach($informacion as $key)
            <label>
                <h4>Nombre_instructor</h4> 
                <input type="text" name="nombre_instructor" placeholder="{{$key->nombre}}" value="{{$key->nombre_instructor}}" >
            </label>
            <br>
                <label>
                    <h4>Apellido_instructor</h4> 
                    <input type="text" name="apellido_instructor" placeholder="{{$key->apellido}}" value="{{$key->apellido_instructor}}">
                </label>
            <br>
            <label>
                <h4>num_doc</h4> 
                <input type="text" name="num_doc" placeholder="{{$key->num_doc}}" value="{{$key->num_doc}}" >
            </label>
            <br>
            <label>
                <h4>cant_momentos</h4> 
                <input type="text" name="cant_momentos" placeholder="{{$key->cant_momentos}}" value="{{$key->cant_momentos}}" >
            </label>
            <br> <label>
                <h4>finalizacion_contrato</h4> 
                <input type="text" name="finalizacion_contrato" placeholder="{{$key->finalizacion_contrato}}" value="{{$key->finalizacion_contrato}}" >
            </label>
            <br>
            @endforeach

        @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
    
    </form>
@endsection

