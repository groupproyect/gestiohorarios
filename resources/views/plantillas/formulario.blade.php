<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo_pagina")</title>
</head>
<body>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');

        /*body{
           background-image: url('https://i.pinimg.com/564x/e8/ba/c0/e8bac0f73fa5b7ae697857faaaf57d5c.jpg');
       
           background-attachment:fixed;
            background-position: center;
            /*background-repeat:unset;
            background-size:38% ; 
        }*/
        
        .main-content {
        margin-left: 40%;
        margin-right: 40%;
        margin-top:5%;
        border-radius: 8%;
       
        }

        .form {
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
 
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        }

        .contenedor1 {
          
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin-right: 30px;
        text-align: center;
        margin-left: 25%;
        margin-top: 10%;
     
      
        }

        .contenedor1 .contenedor2 {
        width: 570px;
        box-sizing: border-box;
        box-shadow: 0 1px 3px 0 #0e6b0e;
        padding: 60px 80px;
        border-bottom: 3px solid #00ab41 ;
        border-left: 3px solid  #00ab41;
        border-top: 3px solid  #00ab41 ;   
        margin-bottom: 32px;
        border-right: 3px solid  #00ab41;
        background-color: white;
        }

        .contenedor1 .form-row {
        text-align: left;
        margin-bottom: 23px;
        }

        .contenedor1 .titulo {
        text-align: center;
        margin-bottom: 60px;
        }

        .contenedor1 h4{
        font-family: 'Quicksand', sans-serif;
        margin-top: 25px;
        }

        .contenedor1 h5{
        font-family: 'Quicksand', sans-serif;
      
        }

        .contenedor1 h2 {
        display: inline-block;
        box-sizing: border-box;
        color:black;
        font-size: 24px;
        padding: 0 30px 15px;
        border-bottom: 4px solid #00ab41;
        margin: 0;
        font-family: 'Quicksand', sans-serif;
        }

        .contenedor1 select {
        display: inline-block;
        box-sizing: border-box;
        color:black;
        padding-right: 25px;
        font-size: 15px;
        width: 225px;
        height: 40px;
        border-bottom: 1px solid #00ab41;
        border-left: 1px solid #00ab41;
        border-top: 1px solid #00ab41;
        margin: 0;
        text-align: center;
        box-shadow: 1px 2px 4px 0 #2b5329;
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        }

        .contenedor1 .form-row>label {
        display: inline-block;
        box-sizing: border-box;
        color:black;
        width: 125px;
        text-align: right;
        padding-right: 25px;

        }

        .contenedor1 input {
        color: black;
        box-sizing: border-box;
        width: 230px;
        box-shadow: 1px 2px 4px 0 #2b5329;
        padding: 12px 18px;
        border: 2px solid #00ab41;
        margin-top:30px;
        }

        .contenedor1 input[type=button],
        input[type=submit] {
        display: block;
        border-radius: 2px;
        background-color: #00ab41;
        color:black;
        font-weight: bold;
        box-shadow: 1px 2px 4px 0  #0e6b0e;
        padding: 15px 35px;
        border: 0;
        font-family: 'Quicksand', sans-serif;
        margin: 55px auto 0;
        margin-top:40px;
        cursor: pointer;
        }

        @media (max-width: 900px) {
            .form {
                margin: 20px auto;
            }
            .contenedor1 {
                position: relative;
                display: block;
                margin: 0 0 50px;
            }
            .contenedor1 .contenedor2 {
                margin: 0 auto 32px;
            }
            .contenedor1:after {
                bottom: -80px;
                left: 50%;
                margin-left: -25px;
            }

        }
    </style>
    
    <div class="contenedor1">
            <div class="contenedor2"> 
                <div class="titulo">
                    <h2>@yield("titulo")</h2>
                </div>    
                @yield("formulario")
            </div>
    </div>

</body>
</html>