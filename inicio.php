<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="shortcut icon" href="image\logopapeleria.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Meraki</title>
</head>
    
<body>
    <?php
        include_once ('templates/header.php');
    ?>
    <!Vistas de productos-->
    <h1>Productos</h1><br>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/lapicespastel.jpg" width="200" height="200" > 
            <h3>Lapices de colores pasteles moovingx10 $500.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="1" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/boligrafo.jpg" width="200" height="200" > 
            <h3>Bolígrafo trabi fantastic borrable  $420.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="2" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/cinta.jpg" width="200" height="200" > 
            <h3>Cinta para decorar $100.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="3" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/cuadernoA5.jpg" width="200" height="200" > 
            <h3>Cuaderno A5 fantasía $400.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="4" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/minilibreta.jpg" width="200" height="200" > 
            <h3>Cuaderno c/e A6  $30.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="5" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>

    <br>

    <div id="productos">
        <div id="producto1">
            <img src="image/productos/boliga.jpg" width="200" height="200" > 
            <h3>Bolígrafo fantasía $30.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="6" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/señaladores.jpg" width="200" height="200" > 
            <h3>Señaladores mooving pastel- flúor $50.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="7" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/nostasad.jpg" width="200" height="200" > 
            <h3>Notas adhesivas 76x100mm $35.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="8" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/grapa.jpg" width="200" height="200" > 
            <h3>Abrochadora maped $45.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="9" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div>
    <div id="productos">
        <div id="producto1">
            <img src="image/productos/cartuchera.jpg" width="200" height="200" > 
            <h3>Cartucheras grandes $200.00</h3>
            <form action="calcular.php" method="POST">
                <select name="pedidos" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input id="indetificador" type="text" name="id_producto" value="10" readonly>
                <input type="submit" value="Comprar">
            </form> 
        </div>
    </div> 
</body>
</html>