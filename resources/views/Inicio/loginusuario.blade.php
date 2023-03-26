@extends("../inicio/app")
@section('content')
@if(session('success'))
    <h1>{{session('success')}}</h1>
<<<<<<< HEAD
<<<<<<< HEAD
@endif                
=======
@endif       
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>         
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
@endif                
>>>>>>> ivank
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
<<<<<<< HEAD
<<<<<<< HEAD
                    <h3 class="card-header text-center">Formulario Login</h3>
=======
                    <h3 class="card-header text-center">Inicio sesion</h3>
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
                    <h3 class="card-header text-center">Formulario Login</h3>
>>>>>>> ivank
                    <div class="card-body">
                        <form method="POST" action="{{ route('custom-login') }}">
                            @csrf
                            <div class="form-group mb-3">
<<<<<<< HEAD
<<<<<<< HEAD
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required
=======
                                <input type="text" placeholder="name" id="name" class="form-control" name="name" required
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required
>>>>>>> ivank
                                    autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
<<<<<<< HEAD
<<<<<<< HEAD
                            </div>
=======
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
                            </div>
>>>>>>> ivank
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
<<<<<<< HEAD
<<<<<<< HEAD
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuerdame
                                    </label>
                                </div>
                            </div>
=======
                          
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
                            
>>>>>>> ivank
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection