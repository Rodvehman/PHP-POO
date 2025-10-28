<?php
class Livro {
    private string $titulo;
    private string $autor;
    private ?int $paginas;

    public function __construct(
        string $valorTitulo, 
        string $valorAutor,
        ?int $valorPaginas = null
    ){
        $this->setValorTitulo($valorTitulo);
        $this->setAutor($valorAutor);
        $this->setTotalPaginas($valorPaginas);
    }

    /* programe também (dentro da classe Livro) um método chamado verificarTitulo que, ao ser chamado, ele verifica se a quantidade de caracteres do atributo "titulo" é menor que 3. E se for, o método deve mostrar uma mensagem vermelha dizendo "Título não pode ter menos do que 3 letras */
    public function verificarTitulo(string $b):string {

        if( mb_strlen($b) < 3 ){
            echo "<p style='color:red'>
            Título não pode ter menos do que 3 letras</p>";
        }

        return $b
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

    private function setValorTitulo(float $valorTitulo):void{
        $a = $this->verificarTitulo($valorTitulo);
        $this->valorTitulo = $valorTitulo;
    }

    private function setAutor(string $autor):void {
        $this->autor = $autor;
    }

    private function setTotalPaginas(int $valorPaginas):void {
        $this->totalPaginas = $valorPaginas;
    }

}