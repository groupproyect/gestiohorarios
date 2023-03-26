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
                <h4>Numero Ficha</h4>
                <input type="text" class="form-control @error('num_ficha') is-invalid @enderror" name="num_ficha" value="{{ old('num_ficha') }}">
                @error('num_ficha')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
                        
        
            <label>
                <h4>codigo_prog</h4>
                <select class="form-control @error('codigo_prog') is-invalid @enderror" name="codigo_prog" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($programa as $codigo_prog)               
                    <option value="{{$codigo_prog->codigo_prog}}">{{$codigo_prog->nombre}}</option> 
                @endforeach
                </select>
                @error('codigo_prog')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            
            <label>
                <h4>cant_aprend</h4>
                <input type="text" class="form-control @error('cant_aprend') is-invalid @enderror" name="cant_aprend"  value="{{ old('cant_aprend') }}">
                @error('cant_aprend')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror			
            </label>
            
            
            <label>
                <h4>cadena_formacion</h4>
                <input type="checkbox" id="check"
 class="form-control @error('cadena_formacion') is-invalid @enderror" name="cadena_formacion"  value="{{ old('cadena_formacion') }}">
                <input type="checkbox" id="check" onclick="validarCheckbox()">
            </label>

            <label>
                <h4>trimestre</h4>
                <input type="text" class="form-control @error('trimestre') is-invalid @enderror" name="trimestre"  value="{{ old('trimestre') }}">
                @error('trimestre')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label>
                <h4>inicio_formacion</h4>
                <input type="text" class="form-control @error('inicio_formacion') is-invalid @enderror" name="inicio_formacion"  value="{{ old('inicio_formacion') }}">
                @error('inicio_formacion')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label>
                <h4>fin_formacion</h4>
                <input type="text" class="form-control @error('fin_formacion') is-invalid @enderror" name="fin_formacion"  value="{{ old('fin_formacion') }}">
                @error('fin_formacion')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label>
                <h4>id_jornada</h4>
                <select class="form-control @error('id_jornada') is-invalid @enderror" name="id_jornada" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($jornada as $id_jornada)               
                    <option value="{{$id_jornada->id}}">{{$id_jornada->descripcion}}</option> 
                @endforeach
                </select>
                @error('codigo_prog')
                <span class="invalid-feedback">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

        @endif
@endsection
            
<script>
    function validarCheckbox()
const checkbox = document.getElementById('check');
{
  if(checkbox.checked==true){
    alert('checkbox esta seleccionado');
  } else {
    
    alert('checkbox NO esta seleccionado');
}
}
</script>