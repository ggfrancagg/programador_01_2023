<?php
require_once './persistence/Banco.php';

function cadastrarVacina($id_vac,$nome_vac,$marca_vac,$lote_vac,$fabricacao_vac,$validade_vac){
	$banco=new Banco();
	$sql="insert into vacina values($id_vac,'$nome_vac','$marca_vac',$lote_vac,'$fabricacao_vac','$validade_vac')";
	$resposta=$banco->executar($sql);
	if(!$resposta){
		return false;
	}else{
		return true;
	}
}

function retornaUltimaVacina(){
	$banco=new Banco();
	$sql="select max(id_vac) from vacina";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$codigo=$linha['max(id_vac)'];
		}
		if($codigo==null){
			$codigo=0;
	} return $codigo;

}

function listarVacina(){
	$banco=new Banco();
	$sql="select * from vacina order by id_vac";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}
}
?>