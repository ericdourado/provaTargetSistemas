<?php
$input_string = 'KLEVISON'; //DIGITE AQUI A STRING PARA SER REALIZADO A INVERSÃO
$input_string_invertida = '';
$tamanho_string = strlen($input_string);

for ($i = $tamanho_string; $i > -1; $i--) { 
    $input_string_invertida .= $input_string[$i];
}
echo $input_string_invertida;

// RETORNO DO CONSOLE: NOSIVELK