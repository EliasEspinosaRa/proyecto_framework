
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="shortcut icon" href="image\logopapeleria.png">
    <title>Papeleria Meraki</title>

</head>
<body>
    <div id="login">
        <h1>Inicio</h1>
            <form action="login.php" method="POST">  <!EL metodo POST oculta los datos, mientras el metodo GET los muetras estos datos se muestran en la url de la pagina-->
                <input type="text" name="name" placeholder ="Usuario"/><br> <!permite crear una caja de texto -->
                <input type="password" name="password" placeholder="Contraseña"/><br><br>
                <button type="submit">Enviar</button><br> <!Envia todos los datos dentro del formulario -->
                
            </form>
    </div>

</body>

</html>