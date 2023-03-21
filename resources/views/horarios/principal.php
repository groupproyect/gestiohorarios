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
  <table class="deaufult"  style=" margin-left:60px; height: 20px; background-color:#20335e;" >
  
    <colgroup spna="6">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
      <col style="width: 16.67%;">
          
    </colgroup>
  
    <thead>
      <td style=" background-color:#20335e"></td>
      <th>Lunes</th>
      <th>Martes</th>
      <th>Miercoles</th>
      <th>Jueves</th>
      <th>Viernes</th>
    </thead>
    <tbody>
      <tr class="jornada">
      <td style=" background-color:#20335e"></td>
        <td style=" background-color:#20335e"colspan="5"> <div class="sub_jornada"> Mañana </div></td>
      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">  
  
        
        <td><h5>Ficha</h5></td>
        <td> <div class="dia" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
        <td> <div class="dia" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>

       
      </tr>
      <tr class="mini_cuadritos" style="background:lightcyan;">
        
        <td><h5>Ficha</h5></td>
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
        
        <td><h5>Ficha</h5></td>
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
        
        <td><h5>Ficha</h5></td>
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
        
        <td><h5>Ficha</h5></td>
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
        <td style=" background-color:#20335e"></td> 
        <td  style=" background-color:#20335e" colspan="5"> <div class="sub_jornada"> Tarde </div></td>
      </tr>
      <tr class="mini_cuadritos" style="background:darkseagreen;">
        
        <td><h5>Ficha</h5></td>
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
        
        <td><h5>Ficha</h5></td>
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
        
        <td><h5>Ficha</h5></td>
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
      <tr class="mini_cuadritos">
        
        <td><h5>Ficha</h5></td>
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
      <tr class="mini_cuadritos" >
        
        <td><h5>Ficha</h5></td>
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

<div id="contelist">
   
<button class="Instructores">Instructores</button> 
 

  <div id="list">
   <div class="caja">
  
    <?php
    for ($i = 0; $i< 2; $i++) {
      ?>
      <div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita"><h1>Adriana Espitia</h1></div>
      <?php
    }
    ?>
<?php
    for ($i = 0; $i< 2; $i++) {
      ?>
    <div class="caja2" draggable="true" ondragstart="drag(event)" id="cajita1"><h1>Arlenys Nieves</h1></div>
    <?php
    }
    ?>
    <div class="caja3" draggable="true" ondragstart="drag(event)" id="cajita2"><h1>Miguel Gomez</h1></div> 
    <div class="caja4" draggable="true" ondragstart="drag(event)" id="cajita3"><h1>Evelio Chaparro </h1></div> 
    <div class="caja5" draggable="true" ondragstart="drag(event)" id="cajita4"><h1>Alexander</h1></div> 
    <div class="caja6" draggable="true" ondragstart="drag(event)" id="cajita5"><h1>Samuel Padilla</h1></div> 
        <div class="drop" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div class="drop" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div class="drop" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
       <div class="drop" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div class="drop" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div class="drop" id="5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        
      </div>
  </div>
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
   
   let contelist=document.getElementsByClassName('Instructores');
   for (let l = 0; l < contelist.length; l++) {
          contelist[l].addEventListener("click",function () {
          this.classList.toggle("active");
          let lista = this.nextElementSibling;
			if (lista.style.display == "inline") {
				lista.style.display = "none";
			}else {
				lista.style.display="inline";
				lista.style.position = "relative";
			}
		});
   }
  
</script>
<style>
#contelist{
    position: fixed;
    top: 0;
    right: 30%;
  }
  button{
    padding: 12px;
    background-color: #0e6b0e ;
    margin-bottom: 12px;
    color:white;
    font-size: 25px;
    margin-left: 140px;     
    font-family: "LeJeuneDeck-Regular", Times, serif; 
   
  }
  

 h1{
    text-align: center;
    text-decoration: none;
    padding: 10px ;
   font-size: 20px;
   font-family: "Cormorant",Georgia,"Times New Roman",Times,serif;
 }

  .caja{
    width: 100%;
    margin-left: 128px; 
  
    background-color:aquamarine;
  }
  .caja1{
     width: 160px;
     height: 65px;
     background:#9CC0E7;

   

   }
.caja2{
    width: 160px;
    height: 65px;
    background:#e6d6a4;

 
  }
  .caja3{
    width: 160px;
    height:65px;
    background:#1d5f6d;


  }
  .caja4{
    width: 160px;
    height: 65px;
    background:#ae8b47;


  }
  .caja5{
    width: 160px;
    height: 65px;
    background:#508c94;

  
  }
  .caja6{
    width:160px;
    height: 65px;
    background:#b19399;
 
  
   
  }
  </style>
</body>
</html>