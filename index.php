<?php
    //Comenentario de una linea
    /*
        Este
        es
        un
        comentario
        de
        varias
        lineas
    */
    echo "Estoy fuera de la estructura html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        echo "Estoy en el Head";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Semana 5 Unidad 2 Iniciando con PHP</title>
</head>
<body class="container">
    <h1>Primer ejemplo de php usar echo</h1>
    <h2>Ejemplo 1 primeros mensajes y uso de echo</h2>
    <p>Este ejemplo me imprime un mensaje desde php en mi pagina web</p>
    <!-- ?php ? + sus signos <> se usan para llamar a php en mi documento html-->
    <?php
        echo "Este es un mensaje desde PHP";
    ?>

    <?php
    //En PHP no hay sensibilidad en el uso de mayusculas y minusculas ejeplo
    ECHO "<br>Hello World! con ECHO<br>";
    echo "Hello World! con echo<br>";
    EcHo "Hello World! con EcHo<br>";
    ?>

    <h2>Ejemplo 2 usando html en php</h2>
    <?php
        echo "<p>Este es un parrafo</p>";
        echo "<h1>Este es un h1 en php</h1>";
        echo "<table>
            <tr>
                <th>Elemento 1</th>
                <th>Elemento 2</th>
                <th>Elemento 3</th>
            </tr>
            <tr>
                <td>100</td>
                <td>200</td>
                <td>400</td>
            </tr>
            <tr>
                <td>600</td>
                <td>300</td>
                <td>600</td>
            </tr>
            <tr>
                <td>600</td>
                <td>700</td>
                <td>400</td>
            </tr>
        </table>";
    ?>

    <h2>Ejemplo declarar y mostrar variables en php y html</h2>
    <?php
        //Declarar variable
        $mensaje = "Hola a todos";
        $numeroEntero = 10;
        $numeroDecimal = 5.5;
        $resultado = $numeroEntero * 2;

        echo "Variable Mensaje ", $mensaje, "<br>";
        echo "Variable NumeroEntero ", $numeroEntero, "<br>";
        echo "Variable NumeroDecimal ", $numeroDecimal, "<br>";
        echo "Variable Resultado ", $resultado;

    ?>

</body>
</html>