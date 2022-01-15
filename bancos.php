<?php

require 'funcoes.php';

$contasCorrentes = [
    60839893370 => [
        'titular' => 'Mateus',
        'saldo' => 1700
    ],
    60839893360 => [
        'titular' => 'João',
        'saldo' => 5000
    ],
    60839892270 => [
        'titular' => "GOAS",
        'saldo' => 100
    ]
];
$contasCorrentes[] = [
    'titular' => 'alguem',
    'saldo' => 500
];


$contasCorrentes['60839893370'] = sacar($contasCorrentes['60839893370'], 500);
$contasCorrentes['60839892270'] = deposito($contasCorrentes['60839892270'],600 );
titularComLetrasMaiusculas($contasCorrentes['60839893370']);

unset($contasCorrentes['60839892270']);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo]= $conta;

    exibeConta($conta);

    /*exibeMensagem("$cpf $titular $saldo");*/
    /*
    exibeMensagem( "$cpf {$conta['titular']} {$conta['saldo']}");
*/

}
echo "</ul>";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Contas Correntes</h1>
<dl>
    <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
        <dt><h3><?= $conta['titular']; ?> - <?= $cpf?></h3></dt>
    Saldo: <dd><?= $conta['saldo'];?></dd>
<?php }?>
</dl>

</body>
</html>
