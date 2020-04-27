<?php
use PHPUnit\Framework\TestCase;
//include './app/ArchivoPrueba.php';
/*Esta linea solo funciona para los test con de docker, porque toma la ruta "./" como la principal del proyecto*/
include "./soluciones.php";
//include "/var/www/html/test/soluciones.php";

/*Esta linea solo funciona para los test sin docker pero no con travis, travis no tiene la misma ruta al ejecutar esta variable */
//include (dirname(__DIR__, 2) . "../soluciones.php");

class SolucionesTest extends TestCase{

    public function testEjercicio0(){
        $resultado = solucionEjercicio0("nombre");
        $this->assertEquals("Hola nombre!", $resultado);
        $var2=2;
    }

    public function testEjercicio1(){
        $resultado = solucionEjercicio1(5, 2);
        $this->assertEquals(5, $resultado);
    }

    public function testEjercicio2(){
        $resultado = solucionEjercicio2(5, 2);
        $this->assertEquals(10, $resultado);
    }

    public function testEjercicio3(){
        $resultado = solucionEjercicio3(10, 5, 2);
        $this->assertEquals(15, $resultado);
    }

    public function testEjercicio4(){
        $valor1 = 5;
        $valor2 = 10;
        $var1 = $valor1;
        $var2 = $valor2;

        solucionEjercicio4($var1, $var2);

        $this->assertEquals(10, $var1);
        $this->assertEquals(5, $var2);
    }

    public function testEjercicio5(){
        $valor = 3;
        $valorLimite = pow($valor,$valor);

        $resultado = solucionEjercicio5($valor);

        /*Me fijo que el valor nunca supere a si mismo elevado al cuadrado*/
        $this->assertTrue($valor <= $resultado);
    }

    public function testEjercicio6(){
        $valor = solucionEjercicio6()[0];
        $valorSiguiente = solucionEjercicio6()[1];

        $resultado = $valor - $valorSiguiente;

        $this->assertEquals(2, $resultado);

    }

    public function testEjercicio7(){
        $key = "[9*26]";
        $resultadoEsperado = 234;

        $resultado =  solucionEjercicio7();

        /*Verifica si el array contiene la key*/
        $this->assertArrayHasKey($key, $resultado, "No contiene la clave solicitada.");
        /*Verifica si el valor de la key es el esperado*/
        $this->assertEquals($resultadoEsperado, $resultado[$key]);
    }

    public function testEjercicio8(){
        $resultado = solucionEjercicio8(3, 5);
        $this->assertEquals(19, $resultado);
    }

    public function testEjercicio9(){
        $autor = "Autor 5";

        $resultado = solucionEjercicio9($autor);

        $this->assertEquals("Libro del Autor 5", $resultado);
    }

    public function testEjercicio10(){
        $valor1 = 2;
        $valor2 = 10;
        $valor3 = 10;

        $resultado = solucionEjercicio10($valor1, $valor2, $valor3);

        $this->assertEquals(10, $resultado);
    }

    public function testEjercicio11(){
        $valor1 = 3;
        $valor2 = 5;
        $valor3 = 20;

        $resultado = solucionEjercicio11($valor1, $valor2, $valor3);

        $this->assertEquals(3, $resultado);
    }

    public function testEjercicio12(){
        $valor1 = 1;
        $valor2 = 2;
        $valor3 = 10;

        $resultado = solucionEjercicio12($valor1, $valor2, $valor3);

        $this->assertEquals(2, $resultado);
    }
}