@extends("../inicio/app")
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1>¡¡¡USUARIO LOGUEADO!!!</h1>
                    <h1>Por favor de click en el siguiente icono para que sea redireccionado con rapidez a nuestro menu principal</h1>
                    <a href="{{route('vista_menu')}}"><img src="..\resources\img\testigo.png" width="100" height="100"  alt="icono de agregar"></a>
                 </div>
            </div>
        </div>
    </div>
</main>
@endsection
               