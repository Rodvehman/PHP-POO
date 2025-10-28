<?php
class Cliente {
    /* Atributos privados NÃO PODEM SER ACESSADOS/MODIFICADOS
    fora da própria classe em que estão declarados. */
    private string $nome;
    private int $idade;
    private string $email;
    private ?string $telefone; 

    public function __construct( 
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null 
    ) {
        $this->nome = $valorDoNome;
        $this->idade = $valorDaIdade;
        $this->email = $valorDoEmail;
        $this->telefone = $valorDoTelefone;
    }


    /* Métodos getters: permite acesso APENAS para leitura */
    public function getNome():string {
        return $this->nome;
    }

    public function getEmail():string {
        return $this->email;
    }
    
    public function getIdade():int {
        return $this->idade;
    }
    public function getTelefone():?string {
        return $this->telefone;
    }

    public function setEmail(string $valorEmail):void {
        /* Usamos o filter_var com a constante FILTER_VALIDATE_EMAIL
        para o PHP verificar se o valor de e-mail informado é válido.
        Se sim, retorna TRUE. Senão, retorna FALSE. */
        $validaEmail = filter_var($valorEmail, FILTER_VALIDATE_EMAIL);
    }
    
}
