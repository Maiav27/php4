<?php
$valor1 = $_GET["v1"];
$valor2 = $_GET["v2"];
$op = $_GET["operacao"];

if($op == "Soma"){
    echo $valor1 + $valor2;
}elseif($op == "Subtração"){
    echo $valor1 - $valor2;
}elseif($op == "Divisão"){
 echo $valor1/$valor2;
    }elseif($op == "Multiplicação"){
        echo $valor1 * $valor2;
    }
?>