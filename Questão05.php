<?php
$input_string = 'KLEVISON';
$input_string_invertida = '';
$tamanho_string = strlen($input_string);

for ($i = $tamanho_string; $i > -1; $i--) { 
    $input_string_invertida .= $input_string[$i];
}
echo $input_string_invertida;

