<?php
class Pessoa{
    public string $nome;
    public int $rg;
    public string $email;

    public function listarDados(){
        echo "Nome: " . $this->nome . "\n" . "RG: " . $this->rg . "\n" ."email: " . $this->email;
    }
}

