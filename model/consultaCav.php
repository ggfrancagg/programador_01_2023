<?php

require_once'./persistence/Banco.php';

function cadastrarConsultaCav($ID_consulta,$Identificacao_cav,$CFMV,$Datacolsu_cav,$Horariocons_cav){
	$banco=new Banco();
	$sql="insert into consultar_cav values($ID_consulta,$Identificacao_cav,'$CFMV',$Datacolsu_cav,$Horariocons_cav)";
		$resp=$banco->executar($sql);
		if (!$resp){ 
			return false;
		}else{
			return true;
		}
	}

function retornaUltimaConsultaCav(){
	$banco=new Banco();
	$sql="select max(ID_consulta) from consultar_cav ";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max(ID_consulta)'];
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
			return $codigo;
		}
	}

?>