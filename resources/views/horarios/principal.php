<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources\css\estilo_tablita.css">
    <title>AREAS</title>
    
</head>
<body>
  
<div class="cajita_fondo" boder="2"style="text-align: center;">
  <table class="deaufult"  style=" margin-left:60px; height: 20px;" >
  
    <colgroup spna="6">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
          
    </colgroup>
  
    <thead>
      <td></td>
      <th>LUNES</th>
      <th>MARTES</th>
      <th>MIERCOLES</th>
      <th>JUEVES</th>
      <th>VIERNES</th>
    </thead>
    <tbody>
      <tr class="jornada">
        <td></td>
        <td colspan="5"> <div class="sub_jornada"> Mañana </div></td>
      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>ficha</h5></td>
        <td> <div class="dia" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>

       
      </tr>
      <tr class="mini_cuadritos" style="background:lightcyan;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:lightcyan;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="jornada">
        <td></td> 
        <td colspan="5"> <div class="sub_jornada"> Tarde </div></td>
      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:lightcyan;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:lightcyan;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>ficha</h5></td>
        <?php
        for($i=1; $i<=5; $i++){
        ?>
        <td><div class="dia">
          
        
        <select name="competencia" id="cualquiera">
          <option value="1">construir</option>
          <option value="2">analizar</option>
          <option value="3">implantar</option>
          <option value="4">diseñar</option>
        </select>
        </div></td>
        <?php
        }        
        ?>

      </tr>
    </tbody>
  </table>
</div>
   
<script>

    /*--------------------------------------------------------------
     codigo java script drag and drop  
    --------------------------------------------------------------*/
    var array = ["","","","",""];

    function allowDrop(ev){
        ev.preventDefault();
    }

    function drag(ev){
      
        ev.dataTransfer.setData("text", ev.target.id)
        
      }

   
       
//array.length=0;
  function drop(ev){
  
    if(array[parseInt(ev.target.id)]==""){
      var data=ev.dataTransfer.getData("text");
      let posicion=array.indexOf(data)
      console.log(posicion)
      console.log(isNaN(posicion))
      if(posicion == -1){

        array[parseInt(ev.target.id)] = data;
        ev.target.appendChild(document.getElementById(data))
        console.log(array)

      }else{
        array[posicion]="";
        array[parseInt(ev.target.id)] = data;
        ev.target.appendChild(document.getElementById(data))
        console.log(array)
      }            

    }  
                 
    }



     /*--------------------------------------------------------------
     codigo java script mostar y ocultar instructores  
    --------------------------------------------------------------*/
    function mostrarCajas(){
     const  lista=document.getElementById('list').style.display = 'block';
    }

    function ocultarCajas(){
     const  lista=document.getElementById('list').style.display = 'none';
    }

</script>
<div id="contelist">
   
   <button type="button" onclick="mostrarCajas();">Ver instructores</button> 
  <div id="list">
    <div class="caja" draggable="true" ondragstart="drag(event)" id="cajita"></div>
    <div class="caja" draggable="true" ondragstart="drag(event)" id="cajita1"></div>
    <div class="caja" draggable="true" ondragstart="drag(event)" id="cajita2"></div>
    <a href="javascript:void(0);" onclick="ocultarCajas();">Ocultar Instructor</a> 
  </div>
</div>
</body>
</html>