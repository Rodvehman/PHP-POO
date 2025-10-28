<?php
class Livro {
    public string $titulo;
    public string $autor;
    public ?int $paginas;

    public function __construct(
        string $valorTitulo, 
        string $valorAutor,
        ?int $valorPaginas = null
    ){
        $this->titulo = $valorTitulo;
        $this->autor = $valorAutor;
        $this->paginas = $valorPaginas;
    }

    /* programe também (dentro da classe Livro) um método chamado verificarTitulo que, ao ser chamado, ele verifica se a quantidade de caracteres do atributo "titulo" é menor que 3. E se for, o método deve mostrar uma mensagem vermelha dizendo "Título não pode ter menos do que 3 letras */
    public function verificarTitulo():void {

        if( mb_strlen($this->titulo) < 3 ){
            echo "<p style='color:red'>
            Título não pode ter menos do que 3 letras</p>";
        }

    }
}