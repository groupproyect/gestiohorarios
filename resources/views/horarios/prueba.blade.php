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
            <table border="1">>
                <tr>
                    <td>competencia</td>
                    <td>raps:</td>
                    <td id="fila1">
                        <input type="text" id="input1">
                        <button id="fila1.agregar" onclick="agregar(event)">+</button>
                    </td>
                    <script>
                        function agregar(e){
                            let id = e.target.id.split(".");
                            let fila = document.getElementById(id[0]);
                            let boton = document.getElementById(e.target.id);
                            boton.insertAdjacentHTML("beforebegin", '<br> <input type="text" id="input1">');
                        }
                    </script>
                </tr>
                
            </table>
            <button>Agregar Competencia</button>
        </center>
    </div>
</body>

<style>
    
</style>
</html>