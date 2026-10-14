<?php
class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade){
        if($quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
        }
        else{
            echo "<p>Estoque insuficiente</p>";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco += ($this->preco * ($percentual / 100));
    }

    public function exibirInfo(){
        echo "<br><br>Venda de " . $this->estoque . " unidade(s) de " . $this->nome . " realizada!<br>";
        echo $this->nome . " => R$ " . $this->preco . " | Estoque: " . $this->estoque . " unidades.";
    }
}

$produto1 = new Produto('Teclado Gamer', 100, 10);
$produto1-> vender(2);
$produto1-> reajustarPreco(10);
$produto1-> exibirInfo();


?>