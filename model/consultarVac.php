<?php

require_once'./persistence/Banco.php';

function cadastrarConsultaVac($ID_consulta,$Identificacao_vac,$CFMV,$Datacolsu_vac,$Horariocons_vac){
	$banco=new Banco();
	$sql="insert into consultar_vac values($ID_consulta,$Identificacao_vac,'$CFMV',$Datacolsu_vac,$Horariocons_vac)";
		$resp=$banco->executar($sql);
		if (!$resp){ 
			return false;
		}else{
			return true;
		}
	}

function retornaUltimaConsultaVac(){
	$banco=new Banco();
	$sql="select max(ID_consulta) from consultar_vac ";
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