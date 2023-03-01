@extends ('plantilla.general')
@section('titulo','Registro')
@section('contenido')
<html lang="en">
<head>
    <link rel="stylesheet" href="../resources\css\esti_usu.css">
</head>
<body background="img\fondoo.gif">

<div class="contact_form">

    <div class="formulario">
          <h1>Registro de Instructores</h1>
           <h3>Welcome dear user!!</h3>

 <form action="" method="post">
   <p>
     <label for="nombre" class="colocar_nombre">Nombres
       <span class="obligatorio">*</span>
     </label>
     <input type="text" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Escribe tu nombre" required=1>
   </p>

   <p>
    <label for="nombre" class="colocar_apellido">Apellidos
      <span class="obligatorio">*</span>
    </label>
    <input type="text" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Escribe tus apellidos" required=1>
  </p>

  <label for="nombre" class="colocar_documento">Numero Documento
    <span class="obligatorio">*</span>
   </label>
  <input type="text" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Escribe tu numero de documento" required=1>
</p>

<label for="nombre" class="colocar_documento">Tipo de contrato
    <span class="obligatorio">*</span>
   </label>
  <input type="text" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Seleccione tipo de contrato" required=1>
</p>

<label for="nombre" class="colocar_documento">Inicio de contrato
    <span class="obligatorio">*</span>
   </label>
  <input type="date" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Digite inicio" required=1>
</p>


<label for="nombre" class="colocar_documento">Fin de contrato 
    <span class="obligatorio">*</span>
   </label>
  <input type="date" name="usuario_comp" id="nombre" required="obligatorio" placeholder="Digite Fin" required=1>
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