<?php
class Pessoa{
    public string $nome;
    public int $idade;

    // Método construtor, deixa alguns campos obrigatórios para serem preenchidos
    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }

    public function apresentarDados(){
        echo "Nome: " . $this->nome . "<br> Idade: " . $this->idade;
    }

}

$pessoa = new Pessoa("Dudinha", 23);

$pessoa->apresentarDados();

// $pessoa->nome = "Recebe nome";
// $pessoa->idade = 16;

?>