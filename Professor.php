<?php
class Professor{
    public string $linkCurriculoLattes;
    public int $idFuncional;
    public bool $decicacaoExclusiva;

    public function listarCurriculo(){
        echo "nome: $this->nome\n";
        echo "Rg: $this->rg\n";
        echo "email: $this->email\n";
        echo "link currico Lattes: $this->linkCurriculoLattes\n";
        echo "id: $this->idFuncional\n";
        echo "Decicação exclusiva: $this->decicacaoExclusiva\n";

    }
}