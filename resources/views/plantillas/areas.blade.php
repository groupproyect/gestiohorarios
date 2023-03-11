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
        
        /*body{
           background-image: url('https://i.pinimg.com/564x/e8/ba/c0/e8bac0f73fa5b7ae697857faaaf57d5c.jpg');
           background-attachment:fixed;
           background-position: center;
            background-repeat:unset;
            background-size:38%;}*/
       
        body{
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
          }
        #titulo{
        margin-top:25px;
        font-family: 'Quicksand', sans-serif;
         text-align: center;
      
         color:black;
         font-size: 45px;
   
       }
       #caja_central {
        width:auto;
        height:auto;
        margin-top: 2px ;
        margin-left:30px;
        margin-right: 10px;
        /*background-color: blue;*/
       }
      
      
      .background {
          height: auto;
          width: auto;
      transition: background 6s;
          display: inline-flex;
          /*flex-direction: column;
          align-items: center;
          justify-content: center;
          text-align: center;*/
          margin-top: 25px;
          margin-bottom: 25px ;
          margin-left: 50px;
          margin-right:70px;
          border-radius:30px;
          border: 3px solid #0201016e;
   
        }
       /*.cuadritos
        { 
          border-radius: 30px;
          width: auto;
          height:auto;
          background-color:#2d6e46 ;
          margin-top: 25px;
          margin-bottom: 25px ;
          margin-left: 50px;
          margin-right:70px;
          border: 3px solid #0201016e;
          display:inline-flex;
        }
*/
        
       .texto_cuadritos
        { 
          margin-left: 15px;
          margin-right: 15px;
          width:auto;
          height:auto;
          font-size: 25px;
          color:white;
          text-align: center;
        }

        #agregarimg{
           /*Las cuatro propiedades de esta clase permiten que el boton de agregar se quede 
           inmovil sin importar si se moviliza la pagina de arriba o hacia abajo */
          display: block;
          position:fixed;
          bottom:80;
          right: 120;
        }

        #editarimg{
          width: auto;
          height: auto;
          margin-bottom: 10px;
        /*margin-top: -72px;*/
         /*margin-left: -15px;*/
          background-color:none;
    
        
        }

        #editarimg .editarimg1{
          width: 150px;
          height: 100px;
          margin-top: 32px;
        /* margin-left: -15px;*/
         background-color:none;
        
        }

        #papeleraimg{
          width: auto;
          height: auto;
          margin-bottom: -10px;
          margin-top: -5px;
          margin-left: 150px;

        }

        #papeleraimg .papeleraimg1{
          margin-top: -50px;
          width:auto;
          height: auto;
    
        }

        .boton{
          background-color: transparent;
          padding-top: 1px;
          width: auto;
          height: auto;
          border: none;
          margin-top: -60px;
        }

        .boton img{
          background-color:none;
          width:125px;
          height:125px;
          padding-bottom: 4px;
       
        }
      </style>

        <u><h3> @yield('titulo') </h3></u>
        @yield('contenido_cuadritos')
        
        <script src="../resources/views/plantillas/main.js"></script>
                  
              
      
</body>
</html>