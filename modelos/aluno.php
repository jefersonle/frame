<?php

class Aluno {

    private $id;
    private $nome;
    private $fone;
    
    private $notas = array();

    function __construct($nome, $fone) {
        $this->id = rand(1, 200);
        $this->nome = $nome;
        $this->fone = $fone;
    }

    function getId() {
        return $this->id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getFone() {
        return $this->fone;
    }

    function setNota($index, $valor) {
        if ($index < 1 || $index > 4) {
            return false;
        } else {
            $this->notas[$index] = intval($valor);
        }
    }
    
    function getNota($index) {
        if (isset($this->notas[$index])) {
            return $this->notas[$index];
        } else {
            return 0;
        }
    }
}
