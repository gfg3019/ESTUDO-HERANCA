<?php
class Aluno extends Pessoa{
    public int $anoIgresso;
    public string $matricula;
    public bool $calouro;

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->nome,
            "rg"=>$this->rg,
            "email"=>$this->email,
            "ano de Ingresso"=>$this->anoIgresso,
            "matricula"=>$this->matricula,
            "calouro"=>$this->calouro,
            ));   
    }
    
    public function inscrverPeriodo(Aluno $dadosAluno, int $periodo = 1){

        if($periodo > 2){
            $this->calouro = true;
            echo $dadosAluno;
            echo "\n$periodo periodo\n"; 
        }elseif ($periodo < 2) {
            $this->calouro = false;
            echo $dadosAluno;
            echo "\n$periodo periodo\n"; 
        }
        
    }

    public function listarDisciplinas(){
        echo "disciplinas listadas";
    }
    
}