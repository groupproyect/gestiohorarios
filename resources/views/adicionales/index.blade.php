
<html>
<head>
     <link rel="stylesheet" href="../resources\css\esti_usu.css">
</head>
<body>
<div class="contact_form">

     <div class="formulario">
           <h1>Iniciar Sesion</h1>
            <h3>Welcome dear user!!</h3>

  <form action="" method="post">
	<p>
	  <label for="nombre" class="Digite_nombre">Nombre
		<span class="obligatorio">*</span>
	  </label>
	  <input type="text" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Escriba su nombre" required=1>
	</p>

	<p>
	  <label for="password" class="Digite_contraseña">Password
		<span class="obligatorio">*</span>
	  </label>
	  <input type="password" name="identidad" id="email" required="obligatorio" placeholder="Escriba su contraseña" required=1>
	</p>


	<button type="submit" name="enviar_formulario" id="enviar">
	  <p>Enviar</p>
	</button>

	<p class="aviso">
	  <span class="obligatorio"> * </span>los campos son obligatorios.
	</p>

  </form>
</div>
</div>
 	
 </body>
 </html>
@endsection