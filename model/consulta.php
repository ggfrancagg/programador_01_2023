<?php

require_once'./persistence/Banco.php';

function cadastrarConsulta(){
	$banco=new Banco();
	$sql="insert into  values()";
		$resp=$banco->executar($sql);
		if (!$resp){ 
			return false;
		}else{
			return true;
		}
	}

function retornaUltimaConsulta(){
	$banco=new Banco();
	$sql="select max() from ";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max()'];
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
			return $codigo;
		}
	}

?>	
