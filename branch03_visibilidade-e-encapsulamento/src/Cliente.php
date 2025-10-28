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
        $this->setNome($valorDoNome);
        $this->setIdade($valorDaIdade);
        $this->setEmail($valorDoEmail);
        $this->setTelefone($valorDoTelefone);
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

      /* Métodos setters: permitem acesso de escrita para definir valores
    de acordo com alguma regra/validação. */
    public function setNome(string $valorNome):void {
        /* Se nome estiver vazio */
        if(empty($valorNome)){
            // apresentamos uma mensagem alertando
            echo "<p style='color:red'>Nome não pode ser vazio!</p>";
        } else {
            // senão, pegamos o valor do nome e colocamos no atributo do objeto
            $this->nome = $valorNome;
        }
    }

    private function setEmail(string $valorEmail):void {
        /* Usamos o filter_var com a constante FILTER_VALIDATE_EMAIL
        para o PHP verificar se o valor de e-mail informado é válido.
        Se sim, retorna TRUE. Senão, retorna FALSE. */
        $validaEmail = filter_var($valorEmail, FILTER_VALIDATE_EMAIL);
        if (!$validaEmail){
            echo "<p style='color: red'>Email inválido!<p>";
        } else {
            $this->email = $valorEmail;
        }
    }

    private function setIdade(int $valorIdade):void {
        $this->idade = $valorIdade;
        if ($valorIdade < 0){
            echo "<p style='color:red'>Idade inferior a 18 anos<p>";
        } else {
            $this->idade = $valorIdade;
        }
    }
    
    private function setTelefone(string $valorTelefone):string{
            $this->telefone = $valorTelefone;
    }
}
