<?php

include ("funciones.php");

$productos = [
    'lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'tomates' =>['unidades' => 2000,
        'precio' => 2.15],
    'cebollas' =>['unidades' => 3200,
        'precio' => 0.49],
    'fresas' =>['unidades' => 4800,
        'precio' => 4.50],
    'manzanas' =>['unidades' => 2500,
        'precio' => 2.10],
];
    $opcion = $_POST["submit"] ?? null;
    switch ($opcion) {
        case "Ver productos":
            $htmlProductos = obtenerProductos($productos);
            break;
        case "Ver precios":
            $htmlPrecio = obtenerPrecio($productos);
            break;
        case "Ver stock":
            $htmlStock = obtenerStock($productos);
            break;
        case "Pedir":
            $htmlPedir = pedir($productos);
            break;
        default:
    }

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
</head>
<body>
<!--Pedir mostrara los productos de menos de 2100 unidades-->
<form action="index.php" method="post">
    <input type="submit" value="Ver productos" name="submit">
    <input type="submit" value="Ver precios" name="submit">
    <input type="submit" value="Ver stock" name="submit">
    <input type="submit" value="Pedir" name="submit">
    <input type="submit" value="Comprar" name="submit">
</form>
<h2><?=$htmlProductos?></h2><br>
<h2><?=$htmlPrecio?></h2>
<h2><?=$htmlStock?></h2>
<h2><?=$htmlPedir?></h2>
</body>
</html>
