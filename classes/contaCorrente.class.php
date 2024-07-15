<?php
class ContaCorrente extends Conta{
    protected $limite;

    public function __construct(int $agencia,
    string $codigo,
    string $dataDeCriacao,
    Pessoa $titular,
    string $senha,
    float $saldo,
    float $limite){

        parent::__construct($agencia,
        $codigo,
        $dataDeCriacao,
        $titular,
        $senha,
        $saldo);

        $this->limite = $limite;

    }

    public function retirar($quantia){
        $imposto = 0.05;

        if (($this->getSaldo() + $this->getLimite()) >= $quantia){
            parent::retirar($quantia);
            parent::retirar($quantia * $imposto);
        }else{
            echo "Retirada não permitida... <br>";
            return false;
        }
        return true;
    }
    public function getLimite(){
        return $this->limite;
    }
    function transferir($conta,$valor){
        if($this->retirar($valor)){
            $conta->depositar($valor);
        }
    }
    
}


?>