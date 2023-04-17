<?php

$valor_desejado = 21; //DIGITE O VALOR PARA SER CALCULADO AQUI
$fibonacci = [0,1];

while (end($fibonacci) <= $valor_desejado){
    $verificador = in_array($valor_desejado, $fibonacci) ? true : false;
    if ($verificador){
        echo 'o valor desejado existe na sequencia fibonacci';
        break;
    }
    $somaValores = $fibonacci[0] + $fibonacci[1];
    array_shift($fibonacci); 
    array_push($fibonacci, $somaValores); 
}
  



