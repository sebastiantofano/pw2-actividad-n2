<?php

function solucionEjercicio0($nombre){
    return "Hola " . $nombre . "!";
}


function solucionEjercicio1($base, $altura){
    $solucion = ($base * $altura) / 2 ;
    return $solucion;
}

function solucionEjercicio2($base, $altura){
    $solucion = $base * $altura;
    return $solucion;
}

// continue con sus soluciones aquí!

function solucionEjercicio3($baseA, $baseB, $altura){
    $solucion = (($baseA + $baseB)/2) * $altura;
    return $solucion;
}

function solucionEjercicio4(&$valorA, &$valorB){
    $aux = $valorA;
    $valorA = $valorB;
    $valorB = $aux;
}

function solucionEjercicio5($valor){
    $resultado = 0;
    $i = 1;
    while ($resultado < pow($valor, $valor)) {
        $resultado = $valor * $i;
        $i++;
    }
    return $resultado;
}

function solucionEjercicio6(){
    $posicion = 0;
    for ($i=100; $i>=0; $i= $i-2){
        $solucion[$posicion] = $i;
        $posicion++;
    }
    return $solucion;
}

function solucionEjercicio7(){
    for ($i=1; $i<=20; $i++){
        for ($j=25; $j<=30; $j++){
            /*Por cada i voy a multiplicar los 5 j*/
            $resultado = $i * $j;
            $tabla["[$i*$j]"] = $resultado;
        }
    }
    return $tabla ;
}

function solucionEjercicio8($valorX, $valorB){

    $resultado = ($valorX * 2) + pow(2,$valorX) + $valorB;

    return $resultado;
}

function solucionEjercicio9($autor){
    $libros = array(
        "Autor 1" => "Libro del Autor 1",
        "Autor 2" => "Libro del Autor 2",
        "Autor 3" => "Libro del Autor 3",
        "Autor 4" => "Libro del Autor 4",
        "Autor 5" => "Libro del Autor 5",
        "Autor 6" => "Libro del Autor 6",
        "Autor 7" => "Libro del Autor 7"
    );
    return $libros[$autor];
}

function solucionEjercicio10($valor1,$valor2,$valor3){
    if($valor1 > $valor2){
        if($valor1 > $valor3){
            return $valor1;
        }
    }elseif ($valor2 > $valor3){
        return $valor2;
    }else{
        return $valor3;
    }
}

function solucionEjercicio11($valor1,$valor2,$valor3){
    if($valor1 < $valor2){
        if($valor1 < $valor3){
            return $valor1;
        }elseif ($valor2 < $valor3){
            return $valor2;
        }else{
            return $valor3;
        }
    }
}

function solucionEjercicio12($valor1,$valor2,$valor3){
    if($valor1 == $valor2 || $valor1 == $valor3 || $valor2 == $valor3){
    return "no existe";
    }
    if ($valor1 > $valor2) {
        if ($valor1 < $valor3) {
            return $valor1;
        }
    } elseif ($valor2 < $valor3) {
        return $valor2;
    } elseif ($valor1 > $valor3) {
        return $valor1;
    } else {
        return $valor3;
    }
}












