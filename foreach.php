<?php
$contasCorrentes = [
    60839893370 => [
        'titular' => 'Mateus',
        'saldo' => 1000
    ],
    60839893360 =>[
        'titular' => 'João',
        'saldo' => 5000
    ],
    60839892270 =>[
        'titular' => "GOAS",
        'saldo' => 100
    ]
];
$contasCorrentes[] = [
    'titular' => 'alguem',
    'saldo' => 500
];



foreach($contasCorrentes as $cpf =>$conta){
    echo $conta['titular'].PHP_EOL;


}