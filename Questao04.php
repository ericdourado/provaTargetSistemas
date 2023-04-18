<?php
$estados = [
    'SP'=>67836.43
    ,'RJ' => 36678.66
    ,'MG' => 29229.88
    ,'ES' => 27165.48
    ,'Outros' => 19849.53
];

$soma_valores = array_sum($estados);

foreach ($estados as $key => $value) {
    echo 'O estado '.$key.' ocupa '.(($value/$soma_valores)*100).'%'.PHP_EOL;
}