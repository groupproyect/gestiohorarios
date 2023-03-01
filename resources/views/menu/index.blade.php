<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menu</title>
    <link href="metro-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
	<link rel="stylesheet" href="..\resources\css\estilosmenu.css">
</head>
<body>
	<div class="contenedor_responsivo">
	<iframe class="iframe_responsivo"src="" name="principal" scrolling="auto" frameborder="0"></iframe>
		
	</div>
		<div class="contenedor_caja">
		<nav>
			<ul id="menu_principal">
				<li>
					<label for="drop-1">
						<img src="" alt="">
                <span class="mif-clipboard mif-lg"></span>
                        Registro
                         <span class="mif-chevron-right mif-lg"></span>
					</label>
					<ul>
						<li><a href="{{route('mostrar_sedes')}}" target="principal">Sedes</a></li>
						<li><a href="{{route('mostrar_ambientes')}}"  target="principal" >Ambientes</a></li>
						<li><a href="{{route('mostrar_areas')}}" target="principal" >Areas</a></li>
					</ul>
				</li>


				<li>
					<label for="drop-2">
                        <span class="mif-pencil mif-lg"></span>
						Programa_horario
					</label>
                    <li><a href=""><span class="mif-user-plus mif-lg"></span> Asignacion rol</a></li>
                    <li><a href=""><span class="mif-history mif-lg"></span> Historial</a></li>

			</ul>
		</nav>
	</div>

</body>
</html>