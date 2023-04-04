<?php

require_once'./persistence/Banco.php';

function cadastrarConsultaOvl($ID_consulta,$id_ovl,$CFMV,$Datacolsu_ovl,$Horariocons_ovl,$prontuario_ovl){
	$banco=new Banco();
	$sql="insert into consultar_ovl values($ID_consulta,$id_ovl,'$CFMV','$Datacolsu_ovl','$Horariocons_ovl','$prontuario_ovl')";
		$resp=$banco->executar($sql);
		if (!$resp){ 
			return false;
		}else{
			return true;
		}
	}

function retornaUltimaConsultaOvl(){
	$banco=new Banco();
	$sql="select max(ID_consulta) from consultar_ovl ";
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
<?php

require_once'./persistence/Banco.php';

function cadastrarConsultaVac($ID_consulta,$Identificacao_vac,$CFMV,$Datacolsu_vac,$Horariocons_vac,$prontuario_ovl){
	$banco=new Banco();
	$sql="insert into consultar_vac values($ID_consulta,$Identificacao_vac,'$CFMV','$Datacolsu_vac','$Horariocons_vac','$prontuario_ovl')";
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
<?php

require_once'./persistence/Banco.php';

function cadastrarConsultaCav($ID_consulta,$Identificacao_cav,$CFMV,$Datacolsu_cav,$Horariocons_cav,$prontuario_cav){
	$banco=new Banco();
	$sql="insert into consultar_cav values($ID_consulta,$Identificacao_cav,'$CFMV','$Datacolsu_cav','$Horariocons_cav','$prontuario_cav')";
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