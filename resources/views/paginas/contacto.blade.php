<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="guardar-contacto" method="post">
        @csrf
        <label for="nombre">
            Nombre: 
        </label>
        <br>
        <input type="text" name="nombre" id="nombre" value="{{ $nombre ?? ' ' }}">
        <br><br>
        <label for="correo">
            Correo: 
        </label>
        <br>
        <input type="mail" name="correo" id="correo" value="{{ $correo ?? ' ' }}">
        <br><br>
        <label for="comentario">
            Comentario: 
        </label>
        <br>
        <textarea type="text" name="comentario" id="comentario" cols="50" rows="10">
        {{ $comentario ?? ' ' }}
        </textarea>
        <br><br>
        <input type="submit" value="enviar">

    </form>
</body>
</html>