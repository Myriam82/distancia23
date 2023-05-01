<?php
/**
*@autor Myriam
*@version 1.0
*/

/**
*Funcion que resta dos números
*@param int $num1 Primer número para la resta
*@param int $num2 Segundo número para la resta
*@return int
*/
function resta ($num1,$num2) {
       $resultadoresta = $num1 - $num2;
       return $resultadoresta;
}

$resta = resta (42,10);
echo "El resultado de la resta es: " . $resta . "<br>";

/**
*Funcion que multiplica dos numeros
*@param int $num1 Primer número para la multiplicacion
*@param int $num2 Segundo número para la multiplicacion
*@return int
*/
function multiplicar ($num1,$num2){
       $resultadomultiplicar = $num1 * $num2;
       return $resultadomultiplicar;
}
$resultadomultiplicar = multiplicar (50,42);
echo "El resultado de la multiplicacion es: " . $resultadomultiplicar;
?>


