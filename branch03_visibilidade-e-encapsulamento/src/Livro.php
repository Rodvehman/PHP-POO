<?php
class Livro {
    private string $titulo;
    private string $autor;
    private ?int $paginas;

    public function __construct(
        string $titulo, 
        string $valorAutor,
        ?int $valorPaginas = null
    ){
        $this->setTitulo($titulo);
        $this->setAutor($valorAutor);
        $this->setTotalPaginas($valorPaginas);
    }

    /* programe também (dentro da classe Livro) um método chamado verificarTitulo que, ao ser chamado, ele verifica se a quantidade de caracteres do atributo "titulo" é menor que 3. E se for, o método deve mostrar uma mensagem vermelha dizendo "Título não pode ter menos do que 3 letras */
    public function verificarTitulo(string $titulo):string {

        if( mb_strlen($titulo) < 3 ){
            echo "<p style='color:red'>
            Título não pode ter menos do que 3 letras</p>";
        }

        return $titulo;
    }

    public function getTitulo():string{
        return $this->titulo;
    }

    public function getAutor():string{
        return $this->autor;
    }

    public function getPaginas():int{
        return $this->paginas;
    }

    private function setTitulo(string $titulo):void{
        // $a = $this->verificarTitulo($valorTitulo);
        $this->titulo = $titulo;
    }

    private function setAutor(string $autor):void {
        $this->autor = $autor;
    }

    private function setTotalPaginas(?int $valorPaginas):void {
        $this->paginas = $valorPaginas;
    }

}