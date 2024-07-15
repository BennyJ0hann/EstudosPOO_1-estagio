<?php
include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';
include_once 'classes/contaPoupanca.class.php';
include_once 'classes/contaCorrente.class.php';

$carlos = new Pessoa(1, "Carlos Henrique", 1.85, 21, '10/04/1976', "Ensino Médio", 650.00);

echo "Manipulando o objeto {$carlos->getNome()}: <br>";
$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/02", $carlos, '9876', 500.00, 200.00);
$contas[2] = new ContaPoupanca(6678, "PP.1234.56", "10/07/02", $carlos, '9876', 500.00, '10/07');

foreach ($contas as $index => $conta) {

    echo "Manipulando a conta $index de: {$conta->getNomeTitular()}: <br>";
    echo "O saldo atual da conta $index é R$ {$conta->getSaldo()}<br>";
    $conta->depositar(200);
    echo "O saldo atual da conta $index depois do depósito é R$ {$conta->getSaldo()}<br>";
    $conta->retirar(100);
    echo "O saldo atual da conta $index depois do saque é R$ {$conta->getSaldo()}<br>";
}
?>