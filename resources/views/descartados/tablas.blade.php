<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('inicial_titulo')</title>
</head>
<body>
      
      <style>

        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
        
        body{
           background-image: url('https://i.pinimg.com/564x/e8/ba/c0/e8bac0f73fa5b7ae697857faaaf57d5c.jpg');
       
           background-attachment:fixed;
            background-position: center;
            /*background-repeat:unset;*/
            background-size:38% ; 
        }
        table {
        margin-top:5%;
        width: auto;
        /*border: 5px solid black;*/
        }       
        th, td {
        width: 16%;
        text-align: center;
        border: 1px solid #000;
        height: 30%;
        font-size: 23px;
        font-family:'Quicksand',sans-serif;
 
        }
        thead {
	      font-size: 20px;
	      color: #FEFEFE;	
	      background-color: #00ab41;
        }

        tbody{
          background-color: #FEFEFE;
        }
      </style>
        
        <table align="center">
          <thead>
            <tr>
              @yield('titulo')
            </tr>
            <tr>
              @yield('encabezado_tabla')
            </tr>
          </thead>
          <tbody>
            @yield('contenido_tabla')
          </tbody>
	      </table>	
      
</body>
</html>