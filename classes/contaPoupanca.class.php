<?php
class ContaPoupanca extends Conta{
    private $aniversario;

    public function __construct(int $agencia,
    string $codigo,
    string $dataDeCriacao,
    Pessoa $titular,
    string $senha,
    float $saldo,
    string $aniversario){
        parent::__construct($agencia,
        $codigo,
        $dataDeCriacao,
        $titular,
        $senha,
        $saldo);

        $this->aniversario = $aniversario;
    }
    function retirar($quantia){
        if($this->getSaldo() >= $quantia){
            parent::retirar($quantia);
        }else{
            echo "Retirada não permitida... <br>";
            return false;
        }
        return true;
    }
    function transferir($conta,$valor){
        if($this->retirar($valor)){
            $conta->depositar($valor);
        }
    }
}


?>