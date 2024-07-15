<?php
abstract class Conta{
    private $agencia;
    private $codigo;
    private $dataDeCriacao;
    public $titular;
    private $senha;
    private $saldo;
    private $cancelada;

    public function __construct(int $agencia,
    string $codigo,
    string $dataDeCriacao,
    Pessoa $titular,
    string $senha,
    float $saldo){
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;

        $this->depositar($saldo);
        $this->cancelada = false;

    }

    public function getNomeTitular(){
        return $this->titular->getNome();
    }
    

    public function retirar($quantia){
        if($quantia > 0 && $this->saldo >= $quantia){
            $this->saldo -= $quantia;
        }
    }
    public function depositar($quantia){
        if($quantia > 0){
            $this->saldo += $quantia;
        }
    }
    public function getSaldo(){
        return $this->saldo;
    }
    abstract function transferir ($conta, $valor);
}

?>