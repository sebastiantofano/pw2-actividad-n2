<?php
include "soluciones.php";
?>
<!DOCTYPE html>
<html>
<title>TP I - PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
        font-family: "Lato", sans-serif;
    }

    .background {
        background-image: url('./images/background.jpg');
        min-height: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }

</style>
<body>

<div class="background w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">
            Trabajo práctico I - Primeros pasos en PHP
        </span>
    </div>
</div>

<div class="w3-light-gray">
    <div class="w3-content w3-container  w3-padding-64">
        <h3 class="w3-center">Instructivo de uso</h3>
        <p>En los ejercicios solicitados a continuación usted deberá realizar los siguientes pasos, como se muestra en el ejercicio 0:</p>
        <ul>
            <li>Crear y escribir la funcion solucionEjercicioX() que tome por parametro valores y devuelve una variable,
                si la solución del ejercicio fuese una concatenación de textos, deberá concatenarlos dentro de la función en una variable y devolver la misma.</li>
            <li>Indicar por pantalla que valores se le pasó a la función y que valor fue el resultante</li>
            <li>Para los ejecicios 0 al 4, Ejecutar los test y lograr que sean exitosos.</li>
            <li>Para los ejecicios 10 al 12, deberá escribir el HTML como lo hacen los ejercicios anteriores y además escribir los test correspondientes para cada uno de ellos. Atención, el test deberá escribirse antes de la función para guiar a la resolución</li>
            <li>Reflexionar si fue más sencillo realizar ejercicios con test ya escritos o sin test, y si nos ayudó/guió escribir los test previo a la solución del ejercicio</li>
        </ul>
    </div>
</div>


<div class="w3-content w3-container ">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 0 - Ejemplo</h3>
        <p>Escribir la función  solucionEjercicio0() de modo que salude al nombre de quien lo invoque. (Reemplace su nombre en la variable)</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                $nombre = "Null Null (jeje)";
                echo "Dada el valor por parametro '$nombre' el resultado de la función  es: " . solucionEjercicio0($nombre);
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 1 - Introducción al PHP</h3>
        <p>Escribir la función  solucionEjercicio1() de modo que calcule el área de un triángulo.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                $base = 5;
                $altura = 3;
                $solucion = solucionEjercicio1($base = 5, $altura = 3);
                echo "Dada una base de $base y altura de $altura, el área del triángulo es " . $solucion ;
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 2 - Introducción al PHP</h3>
        <p>Escribir la función solucionEjercicio2() de modo que calcule el área de un rectángulo.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                $base = 5;
                $altura = 5;
                $solucion = solucionEjercicio2($base,$altura);
                echo "Dada una base de $base y una altura de $altura, el área del rectangulo es " . $solucion;
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 3 - Introducción al PHP</h3>
        <p>Escribir la función solucionEjercicio3() de modo que calcule el área de un trapecio.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    $baseA = 5;
                    $baseB = 5;
                    $altura= 10;
                    $solucion = solucionEjercicio3($baseA,$baseB,$altura);
                    echo "Dada una base A de $baseA, una base B de $baseB y una altura de $altura , el área del trapecio es " . $solucion;
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 4 - Introducción al PHP</h3>
        <p>Escribir la función solucionEjercicio4() de modo que intercambie el contenido de dos variables (Utilizar variables por referencia)</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                $varA = "Valor A";
                $varB = "Valor B";
                $solucion = solucionEjercicio4($varA,$varB);
                echo "Soy la variable A y mi contenido  es: $varA <br />
                      Soy la variable B y mi contenido es: $varB <br /> ";
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 5 - Estructuras secuenciales </h3>
        <p>Escribir la función solucionEjercicio5() de modo que dada una variable en php realice un algoritmo que imprima un nuevo valor a partir de calcular el valor de la variable multiplicada por la iteración en que se encuentre el algoritmo. Repita el proceso hasta que el valor del resultado supere el valor de la variable elevado al valor de la variable.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    $valor = 5;

                    $resultado = solucionEjercicio5($valor);

                    echo "El valor $resultado no supera al número $valor elevado a la $valor";
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 6 - Estructuras secuenciales </h3>
        <p>Escribir la función solucionEjercicio6() de modo que realice un bucle que imprima los números del 0 al 100 en orden invertido y con saltos de 2.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    /*For each para mostrar el array devuelto por la función*/
                     foreach (solucionEjercicio6() as $key => $value){
                         echo "El valor de la posición $key es $value <br/>";
                     }
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 7 - Estructuras secuenciales </h3>
        <p>Escribir la función solucionEjercicio7() de modo que recorra los números del 1 al 20 y
            a cada uno de ellos los multiplique por los números del 25 al 30.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                 foreach (solucionEjercicio7() as $key => $result){
                     echo "El resultado de " . $key . " es " . $result . "<br/>" ;
                 }
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 8 - Estructuras selectivas </h3>
        <p>Escribir la función solucionEjercicio8() de modo que resuelva la ecuación x2+2*x+b, conociendo los valores de x y b (recibidos por parámetro).</p>
        <p class="w3-center w3-light-gray w3-padding">
                <?php
                    $valorX = 3;
                    $valorB = 5;
                    $resultado = solucionEjercicio8($valorX,$valorB);
                    echo "<em> El resultado es: " . $resultado . "</em>";
                ?>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicio 9 - Estructuras selectivas </h3>
        <p>Escribir la función solucionEjercicio9() de modo que devuelva el nombre de un libro
            a leer de entre siete disponibles a partir del valor de un autor determinado.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    $autor = "Autor 5";
                    $solucion = solucionEjercicio9($autor);
                    /*Practico el caracter de escape*/
                    echo "Se ha seleccionado al autor \"$autor\", entonces se devuelve el libro \"$solucion\"";
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64 ">
        <h3 class="w3-center">Ejercicios siguientes - Estructuras selectivas y completar HTML</h3>
        <p>A continuación se darán los enunciados de los ejercicios 10 al 12, usted deberá además de resolverlos, generar la estructura HTML de los ejercicios anteriores,
            indicando la creación de la función que se debe crear y respetando el formato utilizado. Además, deberá crear los test de dichos ejercicios</p>
        <h4>A copiar HTML se ha dicho!</h4>
        <ul>
            <li>
                Escribir un programa php que dados tres números, imprima el
                mayor de ellos.
            </li>
            <li>
                Escribir un programa php que dados tres números imprima el menor de ellos.
            </li>
            <li>
                Escribir un programa php que tres números imprima el valor intermedio de los tres.
            </li>
        </ul>
    </div>

    <hr class="rounded w3-border-amber" >

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 10</h3>
        <p>Escribir un programa php que dados tres números, imprima el mayor de ellos.</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    $valor1 = 2;
                    $valor2 = 10;
                    $valor3 = 20;
                    $resultado = solucionEjercicio10($valor1,$valor2,$valor3);

                    echo "Dado los números $valor1, $valor2 y $valor3, el más grande de ellos es $resultado";
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 11</h3>
        <p>Escribir un programa php que dados tres números imprima el menor de ellos. </p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    $valor1 = 4;
                    $valor2 = 10;
                    $valor3 = 200;

                    $resultado = solucionEjercicio11($valor1,$valor2,$valor3);

                    echo "Dados los números $valor1, $valor2 y $valor3, el menor de ellos es ". $resultado;
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 12</h3>
        <p>Escribir un programas php que dados tres números imprima el valor intermedio de los tres. </p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                $valor1 = 1;
                $valor2 = 4;
                $valor3 = 200;

                $solucion = solucionEjercicio12($valor1,$valor2,$valor3);

                echo "Dados los números $valor1, $valor2 y $valor3, el número intermedio ";
                /*Pregunto si es string porque si son iguales y no existe intermedio retorno un string*/
                if(is_string($solucion)){
                    echo $solucion;
                }else{
                    echo "es el ". $solucion;
                };
                ?>
            </em>
        </p>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <span>Programación web 2 - UNLaM</span>
</footer>


</body>
</html>