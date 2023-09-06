<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo "$tipo";?>

    <div> 
        <h1>Formulario de contacto</h1>
    <form method="post" action="contacto">
        @csrf
        <label for="texto1"> Nombre<input type="text" name="name" placeholder="Nombre"></label><br>
      <div id="mailId" class="divForm"><label for="mail">Correo:<input type="mail" name="mail" placeholder="Correo"
      @if ($tipo == 'alumno')
      value="@alumnos.com"
      @else
      value="@academicos.com"
      @endif
      
      ></label> <br></div>
         <div id="comment" class="divForm"> Comentario:<label for="comment"><textarea name="textArea"></textarea></label> <br></div>
        <label for="enviar"><button type="submit" name="enviar">Enviar</button></label>
        
    </form>


    </div>
    <div> </div>

</body>
</html>