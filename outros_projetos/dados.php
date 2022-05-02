<?php

require_once 'estacionamento.php';



$primeira_conta=new Estacionamento('49324','ellen','paulista',50.62);





echo $primeira_conta->situacao_estacionamento().PHP_EOL;

echo $primeira_conta->Pagamento(4,8).PHP_EOL;

echo $primeira_conta->saida_veiculo().PHP_EOL;

echo $primeira_conta->