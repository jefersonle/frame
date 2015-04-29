<?php

require_once 'modelos/aluno.php';
session_write_close();
session_start();

class Turma {

    private $alunos = array();

    private function popularArray() {
        $a = new Aluno('Joao', '92929292');
        $this->alunos[] = $a;
        $a = new Aluno('Maria', '234333');
        $this->alunos[] = $a;
        $a = new Aluno('Jose', '455542');
        $this->alunos[] = $a;
        $a = new Aluno('Carlos', '98838484');
        $this->alunos[] = $a;
        $a = new Aluno('Antenor', '22322');
        $this->alunos[] = $a;
        $a = new Aluno('Rafael', '933333');
        $this->alunos[] = $a;
        $a = new Aluno('Ana', '111222');
        $this->alunos[] = $a;
        $a = new Aluno('Marcos', '2223333');
        $this->alunos[] = $a;
        $a = new Aluno('Juarez', '777444');
        $this->alunos[] = $a;
        $a = new Aluno('Mario', '222222');
        $this->alunos[] = $a;
        $a = new Aluno('Clara', '666444333');
        $alunos[] = $a;
    }

    public function __construct() {
        if (isset($_SESSION['turma'])) {
            $this->alunos = $_SESSION['turma'];
        } else {
            $this->popularArray();
            $_SESSION['turma'] = $this->alunos;
        }
    }

    function getAlunos() {
        return $this->alunos;
    }

    function getAlunoById($id) {
        $q = count($this->alunos);
        $i = 0;
        while ($i < $q) {
            if ($this->alunos[$i]->getId() == $id) {
                return $this->alunos[$i];
            }
            $i++;
        }
        return null;
    }

    function getAlunoByIndex($index) {
        return $this->alunos[$index];
    }

    function setAluno($index, $aluno) {
        $this->alunos[$index] = $aluno;
    }
}
