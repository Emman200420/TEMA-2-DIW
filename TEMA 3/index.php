<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links</title>
</head>

<style>
   
   form{
    background-color: #3494bdff;
    padding:20px;
    width: 200px;
    
   }

   li{
    list-style: none;
    
   }
   
   a{
    text-decoration: none;
   }
   

   a:active{
    background-color: #458e10ff;
   }
   a:focus{
   background-color: #2ce281ff;
   }



   input:valid{
    background-color: #34eb0bff;
   }
   input:invalid{
    background-color: #fc0000ff;
   }

</style>
<body>
          
            <div class="enlaces">

        <ul>
            <li><a href="https://www.facebook.com/">FB</a></li>
            <li> <a href="https://www.instagram.com/">Instagram</a></li>
            <li><a href="https://www.tiktok.com/login">Tiktok</a></li>
            <li> <a href="https://x.com/?lang=es">Twitter</a></li>
            <li><a href="https://www.threads.com/?hl=es">Threads</a></li>
        </ul>

           </div>
           


            

            <center>
            <h1>formulario</h1>
            </center>

            <center>
            <form action="index.php" method ="get">

                <input id="name" type="text" placeholder="pone tu nombre"  required><br>
                <input id="number" type="number" placeholder="pone tu numero" pattern="\d{9}" required><br>
                <input id="Correo" type="mail"  placeholder="correo" required><br>
                <input id="checkbox" type="checkbox"required> Acepto terminos<br> 
                <input id="textarea" type="textarea" placeholder="pone tu mensaje" required><br>
                <input id="submit" type="submit" value="enviar"><br>


            </form>
            </center>


</body>
</html>