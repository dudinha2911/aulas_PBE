<?php
class ContaBancaria{
    public string $titular;
    public float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function exibirSaldo(){
        echo "Titular: " . $this->titular . " - Saldo atual: R$" . $this->saldo;
    }

}

$conta1 = new ContaBancaria('Dudinha', 300);
$conta1 -> depositar(200);
$conta1 -> sacar(100);
$conta1 -> exibirSaldo();


?>