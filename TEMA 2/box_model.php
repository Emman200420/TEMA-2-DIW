<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .caja{
            width: 200px ;
            height:100px ;
            padding: 10px 5px 10px 5px ;
            margin: 5px;
            border: 5px solid black ;
            background-color: lightcoral;
            background-size: 100px;
            background-image: url();
            background-position: center;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
           
        }
        

        .negro ul  {
            background-color: black;
            width: auto;
            height:400px;

            display: flex;
            justify-content: center;
            align-items: center;

            gap:100px;

            

        }

        .rojo{
            width:  100px;
            height: 100px;
            background-color: red;
           
        }
        .blue{
            width:  100px;
            height: 100px;
            background-color: blue;
            
        }
        .yellow{
            width:  100px;
            height: 100px;
            background-color: yellow;
           
        }



        .screen{
            border:5px solid black;
            height: 400px;

             display: flex;
            justify-content: center;
            align-items: center;
        }



        .ejercicio3{
           padding:100px;
           width: 95px;
            background-color: grey;
           /*margin:0 auto;*/
            border-radius: 10px;
        }

    </style>
    
</head>
<body> 
    <div class="caja"></div> <!--Ejercicio 1-->
    
    <div class="negro"> <!--Ejercicio 2-->

    <ul>
        <li class="rojo"></li>
        <li class="blue"></li>
        <li class="yellow"></li>
    </ul>


    </div>

    <div class="screen">

    <div class="ejercicio3">Ejercicio 3</div> <!--Ejercicio 3-->

    </div>
</body>
</html>