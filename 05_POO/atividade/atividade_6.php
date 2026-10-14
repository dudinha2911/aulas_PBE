<?php
class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo = 10, $tanque = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque;
    }

    public function abastecer($litros){
        if($this->tanque > 0){
            $this->tanque += $litros;
        }
        else{
            echo "<br>ERRO: valor inválido<br><br>";
        }
    }

    public function dirigir($km){
        $gasto = ($km / $this->consumo);
        if($this->tanque < $gasto){
            echo "Não é possível percorrer a distância";
        }
        else{
            $this->tanque - $gasto;
        }
    }

    public function exibirInfo(){
        echo "Modelo: " . $this->modelo . " | Consumo: " . $this->consumo . " km/L | Tanque: " . $this->tanque; 
        echo "<br><br>";
    }
}


$carro1 = new Carro('Honda Civic', 12, 20);
$carro1->exibirInfo();
$carro1->dirigir(60);
$carro1->abastecer(10);
$carro1->exibirInfo();

?>