<?php
class Cliente {
    /* Atributos da classe: representam características
    que os objetos deverão ter */
    public string $nome;
    public int $idade;
    public string $email;

    /* Método responsável por exibir os dados de um objeto */

    // Usamos void para sinalizar que o método não tem return
    public function mostrarDados():void {
        echo "<div>
                    <h4> $this->nome </h4>
                    <p><b>E-mail de contato:</b> $this->email </p>
                    <p><b>Idade:</b> $this->idade anos</p>
                </div>";        
    }
}
