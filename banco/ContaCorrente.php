<?php


class ContaCorrente
{
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;

    public function __construct($titula, $agencia, $numero, $saldo){
        $this->titular = $titula;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
//    public function setSaldo($valor){
//        $this->saldo = $valor;
//        return $this;
//    }
//    public  function getSaldo(){
//        return $this->saldo;
//    }

    public function __get($atributo){
        Validacao::protegeAtributo($atributo);
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->protegeAtributo($atributo);
        $this->$atributo = $valor;
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        return $this;
    }
    public function  depositar($valor){
        $this->saldo = $this->saldo + $valor;
        return $this;
    }
    public function transferir($valor, ContaCorrente $conta){
        Validacao::verificaNumerico($valor);
        $this->sacar($valor);
        $conta->depositar($valor);
        return $this;
    }

    private function formataSaldo(){
        return "R$ " . number_format($this->saldo, 2, ",",".");
    }
    public function getSaldo(){
        return $this->formataSaldo();
    }

    public function __toString(){
        return "O titular da conta é: " . $this->titular . "<br/>" . "Seu saldo atual é: " . $this->formataSaldo();
    }
}