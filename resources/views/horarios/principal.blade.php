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
      <form action="{{route('prueba_h')}}" method="post">
        @csrf
      @for ($i=0; $i < 2; $i++) 
        <tr class="mini_cuadritos" style="background:darkseagreen;">
          <td><h5>ficha</h5></td>
          <td>
            <div class="dia" id="0.{{$i}}.0" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_lunes[]" id="cualquiera" draggable="false">
                <option value="1">construir</option>
                <option value="2">analizar</option>
                <option value="3">implantar</option>
                <option value="4">diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.0" name="instructor_lunes[]">
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
    
      <!-- espacio para la jornada de la tarde -->

      <tr class="jornada">
        <td></td> 
        <td colspan="5"> <div class="sub_jornada"> Tarde </div></td>
      </tr>
      @for ($i=0; $i < 2; $i++) 
        <tr class="mini_cuadritos" style="background:darkseagreen;">
          <td><h5>ficha</h5></td>
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
   
<script>

    /*--------------------------------------------------------------
     codigo java script drag and drop  
    --------------------------------------------------------------*/
    // var array = ["","","","",""];
    var array = [[["","","","",""],["","","","",""]],[["","","","",""],["","","","",""]]];

    function allowDrop(ev){
        ev.preventDefault();
        console.log(ev)
    }

    function drag(ev){
  
      ev.dataTransfer.setData("text", ev.target.id)
      
        
    }

    //funcion para evaluar si existe el objeto en la matriz
    function trae(dato,v,h,z){
      console.log("entramos a verificar");
      let bandera = false;
        for (let i = 0; i < array.length; i++) {
          let temp = array[v][i][z];
          let temp2 = temp.split(".");

          
          if (temp2[0] == dato[0]) {
            if(temp[v][i][z] != dato.join(".")){
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
      
      

      return eje;
    }
       
//array.length=0;
  function drop(ev){
    let punto = ev.target.id;
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
      
      if(posicion == false){
        array[v][h][z] = data;
        ev.target.appendChild(document.getElementById(data))
      }else if (posicion == true ){
      }else{
        array[posicion[0]][posicion[1]][posicion[2]]="";
        let instructores = document.getElementById('instructor_' + posicion[0] + "." + posicion[1] + "." + posicion[2]);
        instructores.setAttribute('value',"");
        array[v][h][z] = data;
        ev.target.appendChild(document.getElementById(data));
        instructores = document.getElementById('instructor_' + v + "." + h + "." + z );
        instructores.setAttribute('value',dato[0]);
        console.log("el array: " + array)
        
        
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
    @for($o = 0; $o < 3 ; $o++)
      <div class="caja" draggable="true" ondragstart="drag(event)" id="cajita.{{$o}}"><h2>cajita</h2></div>
      <div class="caja" draggable="true" ondragstart="drag(event)" id="cajita1.{{$o}}"><h2>cajita1</h2></div>
      <div class="caja" draggable="true" ondragstart="drag(event)" id="cajita2.{{$o}}"><h2>cajita2</h2></div>
    @endfor
   
    <a href="javascript:void(0);" onclick="ocultarCajas();">Ocultar Instructor</a> 
  </div>
</div>
</body>
</html>