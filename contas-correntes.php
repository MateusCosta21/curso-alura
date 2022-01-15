<?php

$conta1 = [
    'titular' => 'Mateus',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'João',
    'saldo' => 5000
];
$conta3 = [
    'titular' => "GOAS",
    'saldo' => 100
];

$contacorrente = [$conta1,$conta2,$conta3];

for($i=0; $i<count($contacorrente); $i++){
    echo $contacorrente[$i] ['titular'] .PHP_EOL;
}