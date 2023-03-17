<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <label for="nums">Choose a value:</label>
    
    <!-- <select id="0.0" onclick="opcion(event)">
        <option value="one" id="0.0.1" class="0.1"  >One</option>
        <option value="two" id="0.0.2" class="0.2"  >Two</option>
        <option value="three" id="0.0.3" class="0.3" >Three</option>
        <option value="four" id="0.0.4" class="0.4"  >Four</option>
    </select>
    <select id="0.1" onclick="opcion(event)">
        <option value="one" id="0.1.1" class="0.1" onclick="opcion(event)" >One</option>
        <option value="two" id="0.1.2" class="0.2" onclick="opcion(event)" >Two</option>
        <option value="three" id="0.1.3" class="0.3"onclick="opcion(event)" >Three</option>
        <option value="four" id="0.1.4" class="0.4" onclick="opcion(event)" >Four</option>
    </select> -->
    
   
    @for ($i = 0; $i < 2; $i++)
    @for ($h = 0; $h < 2; $h++)
    <select id="{{$i}}.{{$h}}" onclick="opcion(event)">
        <option value="one" id="{{$i}}.{{$h}}.1" class="{{$i}}.1"  >One</option>
        <option value="two" id="{{$i}}.{{$h}}.2" class="{{$i}}.2"  >Two</option>
        <option value="three" id="{{$i}}.{{$h}}.3" class="{{$i}}.3" >Three</option>
        <option value="four" id="{{$i}}.{{$h}}.4" class="{{$i}}.4"  >Four</option>
    </select>
    @endfor
    @endfor
    
    <div id="container"></div>
    <script>
    var opciones = [["","","",""],["","","",""]];
    
    function opcion(e) {
        console.log("en la funcion")
        let lista = document.getElementById(e.target.id)

        let value = document.getElementById(lista.options[lista.selectedIndex].id);

        let coor = value.getAttribute('id');
        let c = coor.split(".");

        let posicion = opciones[c[0]][c[1]];

       

        if(posicion == ""){
            opciones[c[0]][c[1]] = c[0] + "." + c[2];
            let clases = document.getElementsByClassName(value.getAttribute('class'));
            for (let i = 0; i < clases.length; i++) {
                let element = document.getElementById(clases[i].getAttribute('id'));
                element.style.display = 'none';
                
            }
           

        }else{
            let clases = document.getElementsByClassName(opciones[c[0]][c[1]]);
            console.log("la clase: "+ opciones[c[0]][c[1]]);
            for (let i = 0; i < clases.length; i++) {
                let element = document.getElementById(clases[i].getAttribute('id'));
                console.log("elemento " + clases[i].getAttribute('id'))
                element.style.display = 'inline';
                
            }
            opciones[c[0]][c[1]] = c[0] + "." + c[2];
            clases = document.getElementsByClassName(value.getAttribute('class'));
            
            for (let i = 0; i < clases.length; i++) {
                let element = document.getElementById(clases[i].getAttribute('id'));
                element.style.display = 'none';
                
            }
        }
        
    }
    </script>
    
</body>
</html>