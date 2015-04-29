<?php
require_once("modelos/db.model.php");

class Produto {
    private $nome = '';
    private $modelo = '';
    private $peso = 0;
    private $preco = 0;
    private $descricao = '';

    public function setNome ($nome){

        $this->nome = $nome;

    }
    public function setModelo ($modelo){

        $this->modelo = $modelo;

    }
    public function setPeso($peso){
        
        $this->peso = $peso;

    }
    public function setPreco ($preco){

        $this->preco = $preco;
        
    }
    public function setDescricao ($desc){

        $this->descricao = $desc;
        
    }
     public function getNome (){

        return $this->nome;

    }
    public function getModelo (){

        return $this->modelo;

    }
    public function getPeso(){
        
        return $this->peso;

    }
    public function getPreco (){

        return $this->preco;
        
    }
    public function getDescricao (){

        return $this->descricao;
        
    }

    public function inserirProduto(){
        $db = new DB();
        $db->conectar();

        $sql = "INSERT INTO produto (nome, modelo, peso, preco, descricao) VALUES ('{$this->getNome()}', '$this->modelo', '$this->peso', '$this->preco', '$this->descricao')";
        $query = $db->query($sql);

    }

    public function alterarProduto($id){
        $db = new DB();
        $db->conectar();

        $sql = "UPDATE produto SET nome='{$this->getNome()}', modelo='{$this->getModelo()}', peso='{$this->getPeso()}', preco='{$this->getPreco()}', descricao='{$this->getDescricao()}' WHERE id_produto='$id'";
        $query = $db->query($sql);

    }

    public function selecionarProduto($id){
        $db = new DB();
        $db->conectar();

        $sql = "SELECT * FROM produto WHERE id_produto='$id'";
        $query = $db->query($sql);
        $produto = $db->assoc($query);

        return $produto;


    }

    public function deleteProduto($id){
        $db = new DB();
        $db->conectar();

        $sql = "DELETE FROM produto WHERE id_produto='$id'";
        $query = $db->query($sql);

    }

    public function listaProdutos(){
        $db = new DB();
        $db->conectar();

        $sql = "SELECT * FROM produto";
        $query = $db->query($sql);
        $tabela = $db->assocTabela($query);

        return $tabela;
    }

}
