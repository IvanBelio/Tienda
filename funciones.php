<?php

function obtenerProductos(array $productos):string{
    $lista = "<ol>";
    foreach ($productos as $producto => $contenido){
        $lista .= "<li>$producto</li>";
    }
    $lista .= "</ol>";
    return $lista;
}
function obtenerPrecio(array $productos):string{
    $precio = "<ol>";
    foreach ($productos as $producto => $contenido) {
        $precio .= "<li>$producto - {$contenido['precio']}€</li>";
    }
    $precio .= "<ol>";
    return $precio;
}

function obtenerStock($productos):string{
    $stock = "<ol>";
    foreach ($productos as $producto => $contenido) {
        $stock .= "<li>$producto - {$contenido['unidades']}</li>";
    }
    $stock .= "<ol>";
    return $stock;
}

function pedir($productos):string{
    $pedir = "<ol>";
    foreach ($productos as $producto => $contenido) {
        if ($contenido['unidades'] < 2100){
        $pedir .= "<li>$producto - {$contenido['unidades']}</li>";
        }
    }
    $pedir .= "<ol>";
    return $pedir;
}


?>