<?php

function sacar(array $conta, float $valorASacar):array
{
    if(500 > $conta['saldo']){
        exibeMensagem( "Vc não pode realizar o saldo");
    }
    else{
        $conta['saldo'] -=500;
    }
    return $conta;
}

function deposito(array $conta, float $valorADepositar):array
{
    if($valorADepositar > 0 ){
        $conta['saldo'] += $valorADepositar;

    }else{
        exibeMensagem( "Não foi possível realizar o deposito");
    }

    return $conta;
}

function exibeMensagem($mensagem){
    echo $mensagem . "<br>";
}

function titularComLetrasMaiusculas(array &$conta){

    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    ['titular'=>$titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular: $titular . Saldo: $saldo";
}