<?php
class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibirTitular(){
        echo "Nome: " . $this->titular;
    }

    public function alteraTitular($novoTitular){
        $this->titular = $novoTitular;
    }
    
    public function exibirSaldo(){
        echo "<br> Saldo: " . $this->saldo;
    }

    public function depositarSaldo($valor){
        $this->saldo += $valor;
    }

    public function sacarSaldo($valor){
        if($valor > $this->saldo){
            echo "<br><br>Não pode sacar esse valor<br>";
        }
        else{
            $this->saldo -= $valor;
        }
    }
}

$conta1 = new ContaBancaria('Dudinha', 1000);
$conta1->exibirTitular();
$conta1->alteraTitular('Ketlin');
echo "<br>";
$conta1->exibirTitular();
$conta1->exibirSaldo();
echo "<br>";
$conta1->depositarSaldo(200);
$conta1->exibirSaldo();
$conta1->sacarSaldo(200);
$conta1->exibirSaldo();

?>