<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créditos Gómez J.J</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
</head>

<body>
    <script type="text/javascript" src="../JavaScript/JavaScript.js"></script>
    <header class="caja1" style="border: none; text-align: center;">
        <span class="titulos">Transacciones</span><br>
        ¡Hola! Aquí puedes realizar tus compras, solo llena el formulario, elige el producto y ¡LISTO!
    </header><br>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../Pages/Almacen Virtual.php">Almacen Virtual</a></li>
            <li><a href="../Pages/Quienes Somos.php">¿Quienes Somos?</a></li>
        </ul>
    </nav>


    
    <div align="center">
        <iframe width="800" height="400" src="https://www.youtube.com/embed/Kqkb4mgqmiw" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
    <div align="left"><img src="../IMAGES/Captura de pantalla 2021-11-22 142013.png" width="500" height="450"></div>

    <form action="">

        <table>
            <tr>
                <td><label>Código Premium </label></td>
                <td><input type="text" id="num1" placeholder="De no tenerlo escriba (000000)">
                    <p>
                </td>

            </tr>
            <tr>
                <td><label>Código del producto</label></td>
                <td><input type="text" id="num2">
                    <p>
                </td>
            </tr>
            <tr>
                <td><label>Número de Cédula</label></td>
                <td><input type="text" id="num3">
                    <p>
                </td>
            </tr>
            <tr>
                <td><label>Forma de pago</label></td>
                <td><input type="text" id="res">
                    <p>
                </td>
            </tr>
            <tr>
                <td><label>Digite el precio del producto</label></td>
                <td><input type="text" id="prec">
                    <p>
                </td>
            </tr>
            <tr>
                <td><label>Elija su producto</label></td>
                <td><input list="Productos">
                    <datalist id="Productos">
                        <option value="Ollas tapa roja" id="ollas">
                        <option value="Olla grande">
                        <option value="Calderos">
                        <option value="Olla a presión">
                        <option value="Sarten y caldero">
                        <option value="Batidora roja">
                        <option value="Sandwichera">
                        <option value="Sandwichera waffle">
                        <option value="Licuadora Blanca">
                        <option value="Ventiladores o abanicos">
                        <option value="Lampara dorada">
                        <option value="Plancha para cabello negra">
                        <option value="Plancha de cabello azul">
                        <option value="Plancha para ropa roja">
                        <option value="Gabinete de baño negro">
                        <option value="Gabinete de balo cafe">
                        <option value="Gabinete de baño blanco">
                        <option value="Gabinete de baño color madera">
                    </datalist>
                </td>
            </tr>
            <tr>
                <td><label>Digite la cantidad de artículos que desea llevar</label></td>
                <td><input type="text" id="cant">
                    <p>
                </td>
            </tr>
            <tr>
                <td><label>Total</label></td>
                <td><input type="text" id="R">
            </tr>
            <tr>
                <td><input type="button" value="Comprar" onclick="Multiplicar()"></td>
            </tr>

        </table>
    </form>
</div>

    <div class="caja1" style="border: none; text-align: center;">
        <span class="titulos">PromoDiciembre</span><br>
        Acumula puntos por cada compra y obten un código premium para redimas en tus proximas compras.
    </div>




</body>

</html>