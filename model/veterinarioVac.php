<?php

require_once'./persistence/Banco.php';

function VeterinarioVac($CFMV,$Datavisita_vac,$Nomevet_vac,$Telefone_vac,$nascvet_vac,$Cuidados_vac,$Identificacao_vac){
	$banco=new Banco();
	$sql="insert into veterinario_cav values($CFMV,$Datavisita_vac,'$Nomevet_vac','$Telefone_vac',$nascvet_vac,'$Cuidados_vac',$Casqueamento_vac,$Identificacao_vac)";
		$resp=$banco->executar($sql);
		if (!$resp){
			return false;
		}else{
			return true;
		}
	}

function retornaUltimoVetVac(){
	$banco=new Banco();
	$sql="select max(Identificacao_vac) from veterinario_vac";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max(Identificacao_vac)'];
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
			return $codigo;
		}
	}

function listarVetVac($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="veterinario_vac"){
			$sql="select * from veterinario_vac order by CFMV";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by Datavisita_vac";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by Nomevet_vac";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by Telefone_vac";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by nascvet_vac";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by  Cuidados_vac";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by Casqueamento_vac";
		}else if($ordem==""){
			$sql="select * from veterinario_vac order by Identificacao_vac";

		
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}



?>	
