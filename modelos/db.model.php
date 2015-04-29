<?php

class DB{
	private $host;
	private $usuario;
	private $senha;
	private $banco;

	public function __construct(){
		$this->setHost('localhost');
		$this->setUsuario('postgres');
		$this->setSenha('123');
		$this->setBanco('produtos');
	}

	public function setHost($par){
		$this->host=$par;
	}

	public function setUsuario($par){
		$this->usuario=$par;
	}
	public function setSenha($par){
		$this->senha=$par;
	}
	public function setBanco($par){
		$this->banco=$par;
	}

	public function getHost(){
		return $this->host;
	}

	public function getUsuario(){
		return $this->usuario;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getBanco(){
		return $this->banco;
	}




	public function conectar(){
		pg_connect("host=".$this->getHost()." user=".$this->getUsuario()." password=".$this->getSenha()." dbname=".$this->getBanco());
	}

	public function query($sql){
		return pg_query($sql);
	}

	public function assoc($query){
		return pg_fetch_assoc($query);
	}

	public function assocTabela($query){
		$tabela = array();
		while($linha = pg_fetch_assoc($query)){

			$tabela[] = $linha;

		}

		return $tabela;
		 
	}


}