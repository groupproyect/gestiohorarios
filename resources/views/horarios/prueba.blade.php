<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <center>
            <form method="POST" action="{{ route('guardar_competencias'); }}" >
                @csrf
                <table border="1" >
                    <thead>
                        <tr>
                            <select name="programa" >
                                <option value=""></option>
                            </select>
                        </tr>
                        <tr>    
                            <th>competencia</th>
                            <th>raps</th>
                        </tr>

                    </thead>
                    <tbody id="competencias">
                        <tr id="fila1">
                        
                            <td> 
                               
                                <input type="text" name="competencia[1]" >
                            </td>
                        
                            <td>
                                <div id="div_c_rap1">
                                    <input id="input0" name="rap[1][]">
                                </div>
                                <button type="button" id="fila.1.agregar" onclick="agregar(event)">+</button>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
                <button type="button" onclick="agregar_c(event)">Agregar Competencia</button>
                <input type="submit" value="Enviar">
            </form>
            
           

            <script>
                var n_i = 1;

                //funcion basada en el video: https://youtu.be/AKBsgjjl3TQ
                const crear = (etiqueta,atributos={},padre)=>{
                    let elemento = document.createElement(etiqueta);
                    let elemento_p = document.getElementById(padre);
                    Object.assign(elemento, atributos);
                    elemento_p.appendChild(elemento);
                    return elemento;

                }
                function agregar(e){
                    let boton = e.target.id.split(".");
                
                    crear('br',{id: 'br'+n_i},"div_c_rap"+boton[1]);
                    crear('input',{ type: 'text', id:'input' + n_i, name:'rap[1][]'},"div_c_rap"+boton[1]);
                    crear('button',{type: 'button', id:'btn.'+n_i+'.eliminar', onclick:function(){eliminar(event)}, textContent:'-'},"div_c_rap" + boton[1]); 
                                        
                    n_i++
                    
                }
                function eliminar(e,cod){
                    let id = e.target.id.split(".");
                    let boton = document.getElementById(e.target.id);
                    let elemento = document.getElementById("input"+id[1]);
                    let br = document.getElementById("br"+id[1])
                    console.log("br"+id[1])
                    if(br !== null){
                        br.remove();
                    }
                    elemento.remove();
                    boton.remove();
                }

                function elim_c(e){
                    let boton = e.target.id.split(".");
                    let element = document.getElementById(boton[1]);
                    // console.log()
                    element.remove();
                }
                
                var num = 2;
                function agregar_c(e){
                    crear('tr',{id:'fila'+num},'competencias');
                    crear('td',{id:'c_'+num},'fila'+num);
                    crear('button',{type:'button', id:'eliminar.fila'+num, onclick:function(){elim_c(event)}, textContent:'X'},'c_'+num);
                    crear('input',{type:"text",name:"competencia["+num+"]"},'c_'+num);
                    crear('td',{id:'c_rap'+num},'fila'+num);
                    crear('div',{id:'div_c_rap'+num},'c_rap'+num);
                    crear('input',{ type: 'text', id:'input' + n_i, name:'rap[1][]'},"div_c_rap"+num);
                    crear('button',{ type: 'button', id:'fila.' + num +'.agregar', onclick:function(){agregar(event);},textContent:'+'},"c_rap"+num);
                    num++
                }
                
            </script>
            <script>
                
            </script>
        </center>
    </div>

    <div class="item" style="background-color: greenyellow; width: 100px; height:20px;">2 <h2>hola</h2></div>
    <button onclick="prueba(event)">remueve</button>
    <script>
        function prueba(){
            const div = document.querySelector(".item:nth-child(2)");   
            document.body.removeChild(div);
        }
    </script>
</body>

<style>

</style>
</html>