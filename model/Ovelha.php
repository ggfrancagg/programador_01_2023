<?php
require_once './persistence/Banco.php';

function cadastrarOvelha($id_ovl,$nome_ovl,$idade_ovl,$raca_ovl,$sexo_ovl,$cor_ovl,$peso_ovl,$altura_ovl){
	$banco=new Banco();
	$sql="insert into ovelhas values($id_ovl,'$nome_ovl',$idade_ovl,'$raca_ovl','$sexo_ovl','$cor_ovl',$peso_ovl,$altura_ovl)";
	echo "$sql";
	$resposta=$banco->executar($sql);
	if(!$resposta){
		return false;
	}else{
		return true;
	}
}

function retornaUltimaOvelha(){
	$banco=new Banco();
	$sql="select max(id_ovl) from ovelhas";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$codigo=$linha['max(id_ovl)'];
		}
		if($codigo==null){
			$codigo=0;
		}
	} return $codigo;

}

function listarOvelha(){
	$banco=new Banco();
	$sql="select * from ovelhas order by id_ovl";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}
?>