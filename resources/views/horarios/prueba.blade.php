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
      <form action="" method="post">
        @csrf
      @for ($i=0; $i < 2; $i++) 
      <tr class="mini_cuadritos" style="background:darkseagreen;">
          <td><h5>ficha</h5></td>
          <td>
            <div class="dia" id="0.{{$i}}.0" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="origen(event)">
            <div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita"><h1>Adriana Espitia</h1></div>  
            <select name="competencia_lunes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.0" name="instructor_lunes[]">
              <div class="caja3" draggable="true" ondragstart="drag(event)" id="cajita2"><h1>Miguel Gomez</h1></div>
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.1" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_martes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.1" name="instructor_martes[]">

            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.2" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_miercoles[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.2" name="instructor_miercoles[]">
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.3" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_jueves[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.3" name="instructor_jueves[]">
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.4" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_viernes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.4" name="instructor_viernes[]">
            </div>
          </td>
        </tr>  
      @endfor
      <tr class="jornada">
        <td style=" background-color:#20335e"></td> 
        <td  style=" background-color:#20335e" colspan="5"> <div class="sub_jornada"> Tarde </div></td>
      </tr>
       <!-- espacio para la jornada de la tarde -->
      @for ($i=0; $i < 2; $i++) 
      <tr class="mini_cuadritos" style="background:lightcyan;">
        
        <td><h5>Ficha</h5></td>
        <td>
            <div class="dia" id="1.{{$i}}.0" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_lunes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.0" name="instructor_lunes[]">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.1" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_martes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.1" name="instructor_martes[]">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.2" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_miercoles[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.2" name="instructor_miercoles[]">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.3" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_jueves[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.3" name="instructor_jueves[]">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.4" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_viernes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.4" name="instructor_viernes[]">
            </div>
          </td>
        </tr>  
      @endfor
        <input type="submit" value="Enviar">
      </form>    
    </tbody>
  </table>
</div>  
        <td><h5>Ficha</h5></td>
        

<div id="contelist">
   
<button class="Instructores">Instructores</button> 
 

  <div id="list">
    
   <div class="caja" id="" ondrop="drop(event)" ondragover="allowDrop(event)">
      {{-- @for ($o = 0; $o< 3; $o++)  --}}
     
      <div class="drop" id="0" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>

      <div class="caja2" draggable="true" ondragstart="drag(event)" id="cajita1"><h1>Arlenys Nieves</h1></div>
      <div class="drop" id="1" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>

      <div class="caja3" draggable="true" ondragstart="drag(event)" id="cajita2"><h1>Miguel Gomez</h1></div> 
      <div class="drop" id="2" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>

      <div class="caja4" draggable="true" ondragstart="drag(event)" id="cajita3"><h1>Evelio Chaparro </h1></div> 
      <div class="drop" id="3" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>

      <div class="caja5" draggable="true" ondragstart="drag(event)" id="cajita4"><h1>Alexander</h1></div> 
      <div class="drop" id="4" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>

      <div class="caja6" draggable="true" ondragstart="drag(event)" id="cajita5"><h1>Samuel Padilla</h1></div> 
      <div class="drop" id="5" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>
      
      {{-- @endfor --}}
    </div>
  </div>
</div>

<script>

  /*--------------------------------------------------------------
    codigo java script drag and drop  
  --------------------------------------------------------------*/
  var array = [[["","","","",""],["","","","",""]],[["","","","",""],["","","","",""]]];

  function allowDrop(ev){
      ev.preventDefault();
  }

  function drag(ev){

    ev.dataTransfer.setData("text", ev.target.id)
    
      
  }

  function origen(ev){
    console.log("en origen")
  
  } 

  //funcion para evaluar si existe el objeto en la matriz
  function trae(dato,v,h,z){

    console.log("entramos a verificar");
    let bandera = false;
    
    for (let i = 0; i < array.length; i++) {
      
      let temp = array[v][i][z];
      let temp2 = temp.split(".");

      if (temp2[0] == dato[0]) {
        
        if(temp != dato.join(".")){
          bandera = true
        }
        
      }
    }

    if(bandera == false){
      
      for (let a = 0; a < array.length; a++) {
        
        for (let b = 0; b < array.length; b++) {
          
          let val = array[a][b].indexOf(dato.join("."));
          
          if(val != -1){
            bandera = [a,b,val];
          } 
        }
      }
    }
    
    let respuesta = bandera;
    console.log(respuesta)
    return respuesta;
  }
   
  //array.length=0;
  function drop(ev){
    let punto = ev.target.id;
    var bandera = true;
    let coordenada = punto.split(".");
    let v = parseInt(coordenada[0]);
    let h = parseInt(coordenada[1]);
    let z = parseInt(coordenada[2]);
    console.log(coordenada)

    if(array[v][h][z] == ""){

      console.log('entramos')
      var data = ev.dataTransfer.getData("text");
      var data1 = data.toString();
      var dato = data1.split(".");
      let posicion = trae(dato,v,h,z);
      console.log("esta es la posicion: "+posicion)
      console.log(ev)

      if(posicion == false){

        array[v][h][z] = data;
        ev.target.appendChild(document.getElementById(data))
        document.getElementById(data).dataset.bandera = dato.join(".");

      }else if (posicion == true ){
      }else{

        array[posicion[0]][posicion[1]][posicion[2]]="";
        let instructores = document.getElementById('instructor_' + posicion[0] + "." + posicion[1] + "." + posicion[2]);
        instructores.setAttribute('value',"");
        array[v][h][z] = data;
        ev.target.appendChild(document.getElementById(data));
        instructores = document.getElementById('instructor_' + v + "." + h + "." + z );
        instructores.setAttribute('value',dato[0]);
        document.getElementById(data).dataset.bandera = dato.join(".");
        console.log("el array: " + array)
        
        
      }            

    }
  } 

  var array2 = ["","","","",""];

  function drop2(ev){
    console.log("funcion drop 2")
    if(array2[parseInt(ev.target.id)]==""){
      
      var data=ev.dataTransfer.getData("text");
      let posicion=array2.indexOf(data)
      
      if(posicion == -1){

        array2[parseInt(ev.target.id)] = data;
        ev.target.appendChild(document.getElementById(data))

      }else{

        array2[posicion]="";
        array2[parseInt(ev.target.id)] = data;
        ev.target.appendChild(document.getElementById(data))
      
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
    overflow-y: scroll;
    overflow-x: hidden;
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
position: absolute;
     height: 65px;
     background:#9CC0E7;
     margin-left: 1px; 
     margin-top: 10px;
     margin-bottom: 10px;
     margin-right: 1px;
     
   }
.caja2{
    width: 160px;
    height: 65px;
    background:#e6d6a4;
    margin-left: 1px; 
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 1px;
  }
  .caja3{
    width: 160px;
    height:65px;
    background:#1d5f6d;
    margin-left: 1px; 
    position: absolute;
        margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 1px;
  }
  .caja4{
    width: 160px;
    height: 65px;
    background:#ae8b47;
    margin-left: 1px; 
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 1px;
  }
  .caja5{
    width: 160px;
    height: 65px;

    background:#508c94;
    margin-left: 1px; 
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 1px;
  }
  .caja6{
    width:160px;
    height: 65px;
    background:#b19399;
    margin-left: 1px; 
    margin-bottom: 10px;
    margin-top: 10px;
    margin-right: 1px;
  }
  </style>
</body>
</html>