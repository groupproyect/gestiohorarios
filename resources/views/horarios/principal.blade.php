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
      <form action="{{route('prueba_h')}}" method="post">
      @csrf
      @for ($i=0; $i < 2; $i++) 
      <tr class="mini_cuadritos" style="background:darkseagreen;">
          <td><h5>ficha</h5></td>
          <td>
            <div class="dia" id="0.{{$i}}.0" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="origen(event)">
              
              <select name="competencia_lunes[]" id="0.{{$i}}.0.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="0.{{$i}}.0.0" class="0.{{$i}}.0.s" >construir</option>
                <option value="2" id="0.{{$i}}.0.1" class="0.{{$i}}.1.s" >analizar</option>
                <option value="3" id="0.{{$i}}.0.2" class="0.{{$i}}.2.s">implementar</option>
                <option value="4" id="0.{{$i}}.0.3" class="0.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.0" name="instructor_lunes[]" draggable="false">
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.1" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_martes[]" id="0.{{$i}}.1.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="0.{{$i}}.1.0" class="0.{{$i}}.0.s" >construir</option>
                <option value="2" id="0.{{$i}}.1.1" class="0.{{$i}}.1.s" >analizar</option>
                <option value="3" id="0.{{$i}}.1.2" class="0.{{$i}}.2.s">implementar</option>
                <option value="4" id="0.{{$i}}.1.3" class="0.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.1" name="instructor_martes[]" >
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.2" ondrop="drop(event)" ondragover="allowDrop(event)" >
              <select name="competencia_miercoles[]" id="0.{{$i}}.2.s" draggable="false" onclick="opcion(event)" > 
                <option value="1" id="0.{{$i}}.2.0" class="0.{{$i}}.0.s" >construir</option>
                <option value="2" id="0.{{$i}}.2.1" class="0.{{$i}}.1.s" >analizar</option>
                <option value="3" id="0.{{$i}}.2.2" class="0.{{$i}}.2.s">implementar</option>
                <option value="4" id="0.{{$i}}.2.3" class="0.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.2" name="instructor_miercoles[]">
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.3" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_jueves[]" id="0.{{$i}}.3.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="0.{{$i}}.3.0" class="0.{{$i}}.0.s" >construir</option>
                <option value="2" id="0.{{$i}}.3.1" class="0.{{$i}}.1.s" >analizar</option>
                <option value="3" id="0.{{$i}}.3.2" class="0.{{$i}}.2.s">implementar</option>
                <option value="4" id="0.{{$i}}.3.3" class="0.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_0.{{$i}}.3" name="instructor_jueves[]">
            </div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.4" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_viernes[]" id="0.{{$i}}.4.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="0.{{$i}}.4.0" class="0.{{$i}}.0.s" >construir</option>
                <option value="2" id="0.{{$i}}.4.1" class="0.{{$i}}.1.s" >analizar</option>
                <option value="3" id="0.{{$i}}.4.2" class="0.{{$i}}.2.s">implementar</option>
                <option value="4" id="0.{{$i}}.4.3" class="0.{{$i}}.3.s"  >Diseñar</option>
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
      <tr class="mini_cuadritos" style="background:darkseagreen;">
          <td><h5>ficha</h5></td>
          <td>
            <div class="dia" id="1.{{$i}}.0" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="origen(event)">
              
              <select name="competencia_lunes[]" id="1.{{$i}}.0.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="1.{{$i}}.0.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="2" id="1.{{$i}}.0.1" class="1.{{$i}}.1.s" >analizar</option>
                <option value="3" id="1.{{$i}}.0.2" class="1.{{$i}}.2.s">implementar</option>
                <option value="4" id="1.{{$i}}.0.3" class="1.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.0" name="instructor_lunes[]" draggable="false">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.1" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_martes[]" id="1.{{$i}}.1.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="1.{{$i}}.1.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="2" id="1.{{$i}}.1.1" class="1.{{$i}}.1.s" >analizar</option>
                <option value="3" id="1.{{$i}}.1.2" class="1.{{$i}}.2.s">implementar</option>
                <option value="4" id="1.{{$i}}.1.3" class="1.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.1" name="instructor_martes[]" >
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.2" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_miercoles[]" id="1.{{$i}}.2.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="1.{{$i}}.2.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="2" id="1.{{$i}}.2.1" class="1.{{$i}}.1.s" >analizar</option>
                <option value="3" id="1.{{$i}}.2.2" class="1.{{$i}}.2.s">implementar</option>
                <option value="4" id="1.{{$i}}.2.3" class="1.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.2" name="instructor_miercoles[]">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.3" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_jueves[]" id="1.{{$i}}.3.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="1.{{$i}}.3.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="2" id="1.{{$i}}.3.1" class="1.{{$i}}.1.s" >analizar</option>
                <option value="3" id="1.{{$i}}.3.2" class="1.{{$i}}.2.s">implementar</option>
                <option value="4" id="1.{{$i}}.3.3" class="1.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.3" name="instructor_jueves[]">
            </div>
          </td>
          <td>
            <div class="dia" id="1.{{$i}}.4" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_viernes[]" id="1.{{$i}}.4.s" draggable="false" onclick="opcion(event)" >
                <option value="1" id="1.{{$i}}.4.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="2" id="1.{{$i}}.4.1" class="1.{{$i}}.1.s" >analizar</option>
                <option value="3" id="1.{{$i}}.4.2" class="1.{{$i}}.2.s">implementar</option>
                <option value="4" id="1.{{$i}}.4.3" class="1.{{$i}}.3.s"  >Diseñar</option>
              </select>
              <input type="hidden" id="instructor_1.{{$i}}.4" name="instructor_viernes[]">
            </div>
          </td>
        </tr> 
      @endfor
        <input type="submit" value="Enviar" id="enviar">
      </form>    
    </tbody>
  </table>


        

<div id="contelist">
   
<button class="Instructores" id = "instructores">Instructores</button> 
 
  
  <div id="list">
    
   <div class="caja" id="" ondrop="drop(event)" ondragover="allowDrop(event)">
      @for ($o = 0; $o< 3; $o++) 
      <div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita.{{$o}}"><h1>Adriana Espitia</h1></div>
      <div class="drop" id="0.{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div>

      <div class="caja2" draggable="true" ondragstart="drag(event)" id="cajita1.{{$o}}"><h1>Arlenys Nieves</h1></div>
      <!-- <div class="drop" id="1" ondrop="drop2(event)" ondragover="allowDrop(event)"></div> -->

      <div class="caja3" draggable="true" ondragstart="drag(event)" id="cajita2.{{$o}}"><h1>Miguel Gomez</h1></div> 
      <!-- <div class="drop" id="2" ondrop="drop2(event)" ondragover="allowDrop(event)"></div> -->

      <div class="caja4" draggable="true" ondragstart="drag(event)" id="cajita3.{{$o}}"><h1>Evelio Chaparro </h1></div> 
      <!-- <div class="drop" id="3" ondrop="drop2(event)" ondragover="allowDrop(event)"></div> -->

      <div class="caja5" draggable="true" ondragstart="drag(event)" id="cajita4.{{$o}}"><h1>Alexander</h1></div> 
      <!-- <div class="drop" id="4" ondrop="drop2(event)" ondragover="allowDrop(event)"></div> -->

      <div class="caja6" draggable="true" ondragstart="drag(event)" id="cajita5.{{$o}}"><h1>Samuel Padilla</h1></div> 
      <!-- <div class="drop" id="5" ondrop="drop2(event)" ondragover="allowDrop(event)"></div> -->
      
      @endfor
    </div>
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
    let coordenada = punto.split(".");
    let v = parseInt(coordenada[0]);
    let h = parseInt(coordenada[1]);
    let z = parseInt(coordenada[2]);
    console.log(coordenada)

    if(array[v][h][z] == ""){

      console.log('entramos')
      let data = ev.dataTransfer.getData("text");
      let data1 = data.toString();
      let dato = data1.split(".");
      let posicion = trae(dato,v,h,z);
      console.log("esta es la posicion: "+posicion)
      console.log(ev)

      if(posicion == false){

        array[v][h][z] = data;
        ev.target.appendChild(document.getElementById(data))
        document.getElementById(data).dataset.bandera = dato.join(".");
        let instructores = document.getElementById('instructor_' + v + "." + h + "." + z);
        instructores.setAttribute('value',dato[0]);

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
      
      let data=ev.dataTransfer.getData("text");
      let bandera = false;
      
      for (let a = 0; a < array.length; a++) {
        for (let b = 0; b < array[a].length; b++) {
          let co
          
        }
        
      }
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
  let contelist=document.getElementById('instructores');
    contelist.addEventListener("click",function () {
    let lista = document.getElementById('list');

    if (lista.style.display == "inline") {
        lista.style.display = "none";
      }else {
        lista.style.display="inline";
        lista.style.position = "relative";
      }
    });

  
</script>
<!-- ====================================================================================================
FUNCION PARA VERIFICAR COMPETENCIA POR FICHA
==================================================================================================== -->

<script>

    var opciones = [[["","","",""],["","","",""]],[["","","",""],["","","",""]]];
    
    function opcion(e) {
        console.log("en la funcion")
        let lista = document.getElementById(e.target.id)
        console.log("pidiendo la opcion")
        let value = document.getElementById(lista.options[lista.selectedIndex].id);
        console.log("pidiendo id de la opcion")
        let coor = value.getAttribute('id');
        let c = coor.split(".");
        let tipo = value.getAttribute('class');
        let posicion = opciones[c[0]][c[1]][c[2]];


        if(posicion == ""){
            opciones[c[0]][c[1]][c[2]] = tipo;
            let clases = document.getElementsByClassName(tipo);
            for (let i = 0; i < clases.length; i++) {
                let element = document.getElementById(clases[i].getAttribute('id'));
                element.style.display = 'none';
                
            }
           

        }else{
            let clases= document.getElementsByClassName(opciones[c[0]][c[1]][c[2]]);
            
            for (let i = 0; i < clases.length; i++) {
                let element = document.getElementById(clases[i].getAttribute('id'));
                console.log("elemento " + clases[i].getAttribute('id'))
                console.log(element.getAttribute('id'))
                element.style.display = 'inline';
                
            }

            opciones[c[0]][c[1]][c[2]] = tipo;
            clases = document.getElementsByClassName(tipo);
            
            for (let i = 0; i < clases.length; i++) {
                let element = document.getElementById(clases[i].getAttribute('id'));
                element.style.display = 'none';
                
            }
        }
        
    }
    </script>
<style>
#contelist{
     width:250px;
    height:520px;
    margin-top: 145px;
    position: fixed;
    top: 0;
    left: 69%;
    overflow-y: scroll;
    overflow-x: hidden;
    padding-left: 1px;


  }
 button{
   
    padding: 12px;
    margin-left:40px;
      margin-right: 30px; 
    background-color: #0e6b0e ;
    margin-bottom: 12px;
    color:white;
    font-size: 25px;
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
    height: 1400px;

  

  }
  .caja1{
        width: 160px;
     height: 65px;
     margin-left:40px;
      margin-right: 10px; 
       margin-bottom: 10px;
     background:#9CC0E7;
   }
.caja2{
    width: 160px;
    height: 65px;
        margin-left:40px;
         margin-bottom: 10px;
    background:#e6d6a4;
  }
  .caja3{
   width: 160px;
    height:65px;
    margin-left:40px;
         margin-bottom: 10px;
    background:#1d5f6d;
  }
  .caja4{
    width: 160px;
    height: 65px;
     margin-left:40px;
    background:#ae8b47;
    margin-bottom: 10px;
    
  }
  .caja5{
       width: 160px;
    height: 65px;
     margin-left:40px;
    background:#508c94;
    margin-bottom: 10px;
   
  }
  .caja6{
      width:160px;
    height: 65px;
    margin-left:40px;
    background:#b19399;
    margin-bottom: 10px;
 
  }
  #enviar{
    width: 70px;
    height: 45px;
    background-color: #1d5f6d;
    border-radius: 2px;
    margin-top: 100px;
  }
  </style>
</body>
</html>