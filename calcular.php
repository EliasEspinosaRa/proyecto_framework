<?php

function total_apagar(){
    $total = 0;
    $precio = 0; 
    $produc = $_POST['pedidos'];
    $identi = $_POST['id_producto'];
    
    switch ($identi) {
        case 1:
            $precio = 500;
            $total = $produc * $precio;
            return $total;
            break;
        case 2:
            $precio = 420;
            $total = $produc * $precio;
            return $total;
            break;
        case 3:
            $precio = 100;
            $total = $produc * $precio;
            return $total;
            break;
        case 4:
            $precio = 400;
            $total = $produc * $precio;
            return $total;
            break;
        case 5:
            $precio = 30;
            $total = $produc * $precio;
            return $total;
            break;
        case 6:
            $precio = 30;
            $total = $produc * $precio;
            return $total;
            break;
        case 7:
            $precio = 50;
            $total = $produc * $precio;
            return $total;
            break;
        case 8:
            $precio = 35;
            $total = $produc * $precio;
            return $total;
            break;
        case 9:
            $precio = 45;
            $total = $produc * $precio;
            return $total;
            break;
        case 10:
            $precio = 200;
            $total = $produc * $precio;
            return $total;
            break;
        default:
            break;
        }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="shortcut icon" href="image\favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Meraki</title>
</head>
<body>
    <?php
    include_once ('templates/header.php');
    ?>
    <div id="login">
        <h1>Total a Pagar</h1>

        <h3>
        <?php
            $producto = $_POST['pedidos'];
            $id_Pro = $_POST['id_producto'];
            echo "<p>Id : $id_Pro | Cantidad: $producto <br> Monto $:" . total_apagar();
        ?>
        </h3>
        <form method="get" action="inicio.php">
            <button type="submit">Cancelar
        </form>
        <form method="get" action="inicio.php">
            <button type="submit">Ir Pagar
        </form>
    </div>
</body>
</html>