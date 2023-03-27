<?php


class Banco 
{
	private $banco;
	private $url;
	private $usuario;
	private $senha;
	private $conexao;
	function __construct()
	{
		$this->banco="farm";
		$this->url="localhost";
		$this->usuario="root";
		$this->senha="";
		$this->conexao=new mysqli($this->url,$this->usuario,$this->senha,$this->banco);
	}
	function executar($sql){
		$teste=$this->conexao->query($sql);
		if($teste){
			return true;
		}else{
			return false;
		}
	}
	function consultar($sql){
		$teste=$this->conexao->query($sql);
		$num_linhas=$teste->num_rows;
		if($num_linhas>0){
			return $teste;
		}else{
			return false;
		}
	}
}
?>