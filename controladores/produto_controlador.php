<?php

require_once('fwk/controller.php');
require_once('modelos/produto.model.php');

class ProdutoControlador extends Controller{

	public function index (){
		$this->render('visao/home_produto_visao.php');
	}

	public function criar(){

		$this->render('visao/criar_produto_visao.php');

	}

	public function salvar(){
		$obj = new Produto;
		$obj->setNome($_POST['nome']);
		$obj->setModelo($_POST['modelo']);
		$obj->setPeso($_POST['peso']);
		$obj->setPreco($_POST['preco']);
		$obj->setDescricao($_POST['descricao']);
		$obj->inserirProduto();


		$this->listar();
		

	}

	public function listar(){
		$obj = new Produto;
		$data = $obj->listaProdutos();

		$this->render('visao/listar_produto_visao.php', $data);


	}

	public function recover(){

		$obj = new Produto;
		$data = $obj->selecionarProduto($_GET['id']);

		$this->render('visao/mostrar_produto_visao.php', $data);

	}

	public function update(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$obj = new Produto;
			$obj->setNome($_POST['nome']);
			$obj->setModelo($_POST['modelo']);
			$obj->setPeso($_POST['peso']);
			$obj->setPreco($_POST['preco']);
			$obj->setDescricao($_POST['descricao']);
			$obj->alterarProduto($_POST['id']);

		}

		$obj = new Produto;
		$data = $obj->selecionarProduto($_GET['id']);

		$this->render('visao/editar_produto_visao.php', $data);


	}

	public function delete(){

		$obj = new Produto;
		$obj->deleteProduto($_GET['id']);

		$this->listar();

	}
}