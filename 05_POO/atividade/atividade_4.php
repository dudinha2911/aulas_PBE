<?php
class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
        if($percentual > 0 && $percentual <= 10){
           $this-> salario += ($this->salario * ($percentual / 100));
        }
        else{
            echo "Erro: percentual inválido devido ao intervalo permitido";
        }
    }
    public function exibirFunc(){
        echo "<p>Funcionário: " . $this->nome . "</p>";
    }

    public function exibirSalario(){
        echo "<p>Salário: " . $this->salario . "</p>";
    }
}

$fun = new Funcionario('Carlos', 3000);
$fun->aumentarSalario(10);
$fun->exibirFunc();
$fun->exibirSalario();

?>