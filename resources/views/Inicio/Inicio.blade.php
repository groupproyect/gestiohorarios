@extends("../inicio/estiloinicio")
@section('titulo_inicio', '{{ $titulo }}')
@section('titulo')
    {{$titulo}}
@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@section('formulario')
    <form action="{{$cod}}" method="post" >
        @csrf
        @if(empty($inicio))
        <br>
            <label>
                <h4>Nombre </h4> 
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
              @error('Nombre')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </label>
            <br>
            <label>
                <h4>Email</h4> 
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
              @error('Email')
                 <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </label>
            <br>
                <label>
                    <h4>Contraseña</h4> 
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                    @error('Contraseña')
                    <span class="invalid-feedback">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
                @else
        
      @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
    
    </form>
@endsection

