<?php

require_once('fwk/controller.php');
require_once('modelos/aluno.php');
require_once('modelos/turma.php');

class AlunoControlador extends Controller {

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['turma'] = new Turma();

        $this->render('visao/alunos_listar_visao.php', $data);
    }

    public function listar_notas() {
        $data['turma'] = new Turma();
        $this->render('visao/alunos_listar_notas_visao.php', $data);
    }

    public function atribuir_nota() {
        $data['index'] = $_POST['index'];
        $data['turma'] = new Turma();
        $data['aluno'] = $data['turma']->getAlunoByIndex($data['index']);
        $this->render('visao/aluno_form_nota.php', $data);
    }

    public function salvar_nota() {
        $data['index'] = $_POST['index'];

        $turma = new Turma();
        $aluno = $turma->getAlunoByIndex($data['index']);
        $aluno->setNota(1, $_POST['n1']);
        $aluno->setNota(2, $_POST['n2']);
        $aluno->setNota(3, $_POST['n3']);
        $aluno->setNota(4, $_POST['n4']);
        $turma->setAluno($data['index'], $aluno);

        $data['turma'] = $turma;
        $data['aluno'] = $aluno;

        $this->listar();
    }
}
