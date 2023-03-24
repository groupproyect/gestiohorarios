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
          <td >
            <div class="td_dia">
              <div class="dia" id="0.{{$i}}.0" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="origen(event)">
                <select name="competencia_lunes[]" id="0.{{$i}}.0.s" draggable="false" onclick="opcion(event)" >
                  <option disabled selected>debe escoger competencia</option>
                  <option value="1" id="0.{{$i}}.0.0" class="0.{{$i}}.0.s" >construir</option>
                  <option value="2" id="0.{{$i}}.0.1" class="0.{{$i}}.1.s" >analizar</option>
                  <option value="3" id="0.{{$i}}.0.2" class="0.{{$i}}.2.s">implementar</option>
                  <option value="4" id="0.{{$i}}.0.3" class="0.{{$i}}.3.s"  >Diseñar</option>
                  <input type="hidden" id="instructor_0.{{$i}}.0" name="instructor_lunes[]" draggable="false">
                </select>
              </div>
            </div>
            <div id="dia1"></div>
          </td>
          <td>
            <div class="dia" id="0.{{$i}}.1" ondrop="drop(event)" ondragover="allowDrop(event)">
              <select name="competencia_martes[]" id="0.{{$i}}.1.s" draggable="false" onclick="opcion(event)" >
                <option disabled selected>debe escoger competencia</option>
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
                <option disabled selected>debe escoger competencia</option> 
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
                <option disabled selected>debe escoger competencia</option>
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
                <option disabled selected>debe escoger competencia</option>
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
                <option disabled selected>debe escoger competencia</option>
                <option value="1" id="1.{{$i}}.0.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="1" id="1.{{$i}}.0.01" class="1.{{$i}}.01.s" >construir</option>
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
                <option disabled selected>debe escojer competencia</option>
                <option value="1" id="1.{{$i}}.1.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="1" id="1.{{$i}}.1.01" class="1.{{$i}}.01.s" >construir</option>
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
                <option disabled selected>debe escoger competencia</option>
                <option value="1" id="1.{{$i}}.2.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="1" id="1.{{$i}}.2.01" class="1.{{$i}}.01.s" >construir</option>
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
                <option disabled selected>debe escoger competencia</option>
                <option value="1" id="1.{{$i}}.3.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="1" id="1.{{$i}}.3.01" class="1.{{$i}}.01.s" >construir</option>
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
                <option disabled selected>debe escoger competencia</option>
                <option value="1" id="1.{{$i}}.4.0" class="1.{{$i}}.0.s" >construir</option>
                <option value="1" id="1.{{$i}}.4.01" class="1.{{$i}}.01.s" >construir</option>
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


        
  <button class="Instructores" id = "instructores">Instructores</button> 
<div id="contelist">
  <div id="list">
   <div class="caja" id="" ondrop="drop(event)" ondragover="allowDrop(event)">
      
      @for ($o = 0; $o< 3; $o++)
      @php $col = 0; @endphp
      <table class="cajainstru1" border="0" style="border-color: #e1ddbf;" > 
        <tr  style="border-color: #e1ddbf;"  border="0">
          <td style="background-color: #e1ddbf; "><div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita.{{$o}}"><h1>Adriana Espitia</h1></div></td>
          <td style="background-color: #e1ddbf;"><div class="drop" id="{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div></td>
          
        </tr>
      </table>
        
      <table  class="cajainstru1" border="0">
        <tr>
          <td style="background-color: #e1ddbf;"><div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita1.{{$o}}"><h1>Arlenys Nieves</h1></div></td>
          <td><div style="background-color: #e1ddbf;" class="drop" id="{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div></td>
        </tr>
      </table>

      <table  class="cajainstru1" border="0">
        <tr>
          <td style="background-color: #e1ddbf;"><div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita2.{{$o}}"><h1>Miguel Gomez</h1></div></td>
          <div style="background-color: #e1ddbf;" class="drop" id="{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div></td>
        </tr>
      </table>
      <table  class="cajainstru1" border="0">
        <tr>
          <td  style="background-color: #e1ddbf;"><div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita3.{{$o}}"><h1>Evelio Chaparro </h1></div></td>
          <div style="background-color: #e1ddbf;" class="drop" id="{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div> </td>
        </tr>
      </table>
      <table  class="cajainstru1" border="0">
        <tr >
          <td style="background-color: #e1ddbf;"> <div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita4.{{$o}}"><h1>Alexander</h1></div></td>
          <td><div style="background-color: #e1ddbf;" class="drop" id="{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div></td>
        </tr>
      </table>
      <table  class="cajainstru1" border="0">
        <tr>
          <td style="background-color: #e1ddbf;"> <div class="caja1" draggable="true" ondragstart="drag(event)" id="cajita5.{{$o}}"><h1>Samuel Padilla</h1></div></td>
          <td><div style="background-color: #e1ddbf;" class="drop" id="{{$o}}" ondrop="drop2(event)" ondragover="allowDrop(event)"></div></td>
        </tr>
      </table>

      
      @endfor
     
    </div>
  </div>
</div>

<!-- CODIGO PARA ASIGNAR COLOR A DIV DE INSTRUCTOR -->
<script> 
  let colores = ["#9CC0E7","#e6d6a4","#1d5f6d","#ae8b47","#508c94","#b19399"];
  let cajas = document.getElementsByClassName('caja1');
  let col = 0;
  for (let index = 0; index < cajas.length; index++) {
    console.log(cajas[index])
    cajas[index].style.backgroundColor = colores[col];
    col++;
    if(col == 6){
      col = 0;
    }
    
  }


  // FUNCION PARA BUSCAR ELEMENTO EN UN AREGLO
  // const buscar = (id,cant,arreglo)=>{
  //   for (let u = 0; u < cant; u++) {
  //     const element = array[u];
      
  //   }
  // }
</script>
<script>

  /*--------------------------------------------------------------
    codigo java script drag and drop  
  --------------------------------------------------------------*/
  function allowDrop(ev){
      ev.preventDefault();
  }

  function drag(ev){

    ev.dataTransfer.setData("text", ev.target.id)
    ev.dataTransfer.setData("padre", ev.target.parentNode.id)
    console.log("este es el padre: "+ ev.target.parentNode.id)
      
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

  var array = [[["","","","",""],["","","","",""]],[["","","","",""],["","","","",""]]];

  //array.length=0;
  function drop(ev){

    let evento;
    let coordenada;
    let data;
    
    if(Array.isArray(ev) === true){
      evento = document.getElementById(ev[0]);
      data = ev[1];
      
    }else{
      evento = ev.target
      data = ev.dataTransfer.getData("text");
    }

    coordenada = evento.id.split(".")
    
    let v = parseInt(coordenada[0]);
    let h = parseInt(coordenada[1]);
    let z = parseInt(coordenada[2]);
    console.log(coordenada)

    if(array[v][h][z] == ""){

      let dato = data.split(".");
      let posicion = trae(dato,v,h,z);
      console.log("esta es la posicion: "+posicion)
      console.log(ev)

      if(posicion == false){

        array[v][h][z] = data;
        evento.appendChild(document.getElementById(data))
        let instructores = document.getElementById('instructor_' + v + "." + h + "." + z);
        instructores.setAttribute('value',dato[0]);
        
        //return para la funcion append
        if(Array.isArray(ev) === true){
          return false;  
        }
        
      }else if (posicion == true ){
        if(Array.isArray(ev) === true){
          return true;  
        }
      }else{

        array[posicion[0]][posicion[1]][posicion[2]]="";
        let instructores = document.getElementById('instructor_' + posicion[0] + "." + posicion[1] + "." + posicion[2]);
        instructores.setAttribute('value',"");
        array[v][h][z] = data;
        evento.appendChild(document.getElementById(data));
        instructores = document.getElementById('instructor_' + v + "." + h + "." + z );
        instructores.setAttribute('value',dato[0]);
        console.log("el array: " + array);

        //return para la funcion append
        if(Array.isArray(ev) === true){
          return false;  
        }
        
        
      }            

    }
  } 

  var array2 = ["","","","","","","","","","","","",""];

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
        lista.style.overflow-y=="scroll";
  

       
      }else {
        lista.style.display="inline";
        lista.style.position = "relative";
        lista.style.overflow-y=="hidden";
   
      
      }
    });

  
</script>
<!-- ====================================================================================================
FUNCION PARA VERIFICAR COMPETENCIA POR FICHA
==================================================================================================== -->

<script>

  var opciones = [[["","","",""],["","","",""]],[["","","",""],["","","",""]]];
  var valores = [[["","","",""],["","","",""]],[["","","",""],["","","",""]]];

  function opcion(e) {
      console.log("en la funcion")
      let lista = document.getElementById(e.target.id)
      console.log("pidiendo la opcion")
      let value = document.getElementById(lista.options[lista.selectedIndex].id);
      console.log("pidiendo id de la opcion")
      let c = value.getAttribute('id').split(".");
      let tipo = value.getAttribute('class');
      let valor = value.getAttribute('value');
      let posicion = opciones[c[0]][c[1]][c[2]];
      


      if(posicion == ""){
          opciones[c[0]][c[1]][c[2]] = tipo;
          valores[c[0]][c[1]][c[2]] = valor;
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
          valores[c[0]][c[1]][c[2]] = valor;
          clases = document.getElementsByClassName(tipo);
          
          for (let i = 0; i < clases.length; i++) {
              let element = document.getElementById(clases[i].getAttribute('id'));
              element.style.display = 'none';
              
          }
      }
    console.log("la opciones estan asi: "+opciones)
    console.log("la opciones estan asi: "+valores)
  }
  const append = (valor)=>{
    for (let a = 0; a < array.length; a++) {
      for (let b = 0; b < array[a].length; b++) {
        for (let c = 0; c < array[a][b].length; c++) {
          if (array[a][b][c] != "" && valores[a][b][c] != "") {

            for (let d = 0; d < valores.length; d++) {
              
              if(valores[a][b][c] == valores[a][b][d] && d != c){
                
              }
                  
                
                
              
              
            }
            
          }
          
        }
        
      }
      
    }
  }

</script>
<style>
#contelist{
     width:200px;
    height:560px;
    margin-top: 218px;
    position: fixed;
    top: 0;
    left: 75%;
    overflow-y: scroll;
    overflow-x: hidden;
    padding-left: 1px;
    padding-top: 2px;
       padding-bottom: 2px;
   /* background-color:#babebf;*/
    border-radius:10px;
  /*  box-shadow: 5px 4px 10px #626367;*/

  }

  #contelist::-webkit-scrollbar{
    width: 10px;
    background-color::#babebf;
    border-radius:10px;
  }

  #contelist::-webkit-scrollbar-thumb{
    background-color: #4e4e4e;
    border-radius:30px;
    border: 2px /*solid #babebf*/;
    


  }
 button{
  position: fixed;
    top: 0;
    left: 73.7%;
    float:left;
   margin-top:150px;
    padding: 12px;
    margin-left:90px;
      margin-right: 30px; 
    background-color: #0e6b0e ;
    margin-bottom: 12px;
    color:white;
    font-size: 25px;
    border: none; 
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
  margin-left: 9px;
  padding-top: 2px;

}
  .caja1{
    width: 170px;
    height: 65px;
    margin-bottom: 10px;
     
  }

  #enviar{
    width: 95px;
    height: 50px;
    background-color: #1d5f6d;
    color: white;
    font-family: "LeJeuneDeck-Regular", Times, serif; 
    padding: 12px;
    border-radius: 2px;
    margin-top: 790px;
    margin-left: -110px;
    font-size: 25px;
    position: absolute;
  }

 
  .cajainstru1 {
  
    width: 160px;
    height: 60px;
    margin-top: 1px;

  }
.instru1{
  background-color: none;
}
  .cajainstru2 {
    width: 160px;
    height: 60px;
    margin-top: 1px;
 
  }
  .cajainstru3 {
    width: 160px;
    height: 60px;
    margin-top: 1px;
    background-color: none;
  }
  .cajainstru4 {
    width: 160px;
    height: 60px;
    margin-top: 1px;
    background-color: none;
  }
  .cajainstru5 {
    width: 160px;
    height: 60px;
    margin-top: 1px;
    background-color: none;
  }
  .cajainstru6 {
    width: 160px;
    height: 60px;
    margin-top: 1px;
    background-color: none;
  }
  .cajainstru7 {
    width: 160px;
    height: 60px;
    margin-top: 1px;
    background-color: none;
  }
  
  </style>
</body>
</html>