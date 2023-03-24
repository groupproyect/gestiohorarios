<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="default" border="0">


    <tr>

        <th>Competencia</th>
    
        <th>Raps</th>
    
        <th>Editar</th>
    
      </tr>
    <tr>
        <td rowspan="2">Competencia1</td>
      <th>Rap1</th>
      <td rowspan="2"> <div id="editarimg"><div class="editarimg1"><img src="..\resources\img\editar.png" alt="icono de editar"></div> </td>
  

    </tr>
  
    <tr>
    
      <th>Rap2</th>

  
    </tr>

  
  
  
  </table>

  <style>
      body{
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
       background-color: #e1ddbf;}
.table {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;

  max-width: 600px;
  padding:95px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;

}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;

  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
  font-family: "LeJeuneDeck-Regular", Times, serif; 
         text-align: center;
      
     
         font-size: 35px;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom: 1px solid #C1C3D1;
  color:#0a0a0a;

  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
  font-family: "LeJeuneDeck-Regular", Times, serif; 
         text-align: center;
      
     
         font-size: 45px;
}
 
tr:hover td {
  background:#6a76f5;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
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
  </style>
</body>
</html>