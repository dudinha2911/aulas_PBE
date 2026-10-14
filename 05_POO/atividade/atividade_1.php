<?php
class Livro{
    public string $titulo;
    public string $autor;
    public int $pagina;
    public string $anoPublicacao;

    public function __construct($titulo, $autor, $pagina, $anoPublicacao = 'Desconhecido'){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pagina = $pagina;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes(){
        echo "Título: " . $this->titulo . ", Autor: " . $this->autor . ", Páginas: " . $this->pagina . ". Publicado em: " . $this->anoPublicacao;
    }
}

$livro1 = new Livro('Dom Casmurro', 'Machado de Assis', 256, 1899);
$livro1-> exibirDetalhes();

echo "<br><br>";

$livro2 = new Livro('Lucíola', 'José de Alencar', 160);
$livro2-> exibirDetalhes();


?>