<?php
class Pessoa
{
    protected $codigo;
    public $nome;
    protected $altura;
    protected $idade;
    protected $nascimento;
    protected $escolaridade;
    protected $salario;
    public function __construct(
        int $codigo,
        string $nome,
        float $altura,
        int $idade,
        string $nascimento,
        string $escolaridade,
        float $salario
    ) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;



    }
    public function getNome(){
        return $this->nome;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getEscolaridade(){
        return $this->escolaridade;
    }
    
    public function crescer($centimetros)
    {
        if ($centimetros > 0) {
            $this->altura += $centimetros;
        }
    }
    public function formar(string $titulacao)
    {
        $this->escolaridade = $titulacao;
    }
    public function envelhecer(int $anos)
    {
        if ($anos > 0) {
            $this->idade += $anos;
        }
    }
}


?>