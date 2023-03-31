<?php

require_once'./persistence/Banco.php';

function VeterinarioCav($CFMV,$Tosa_cav,$Nomevet_cav,$Casqueamento_cav,$Telefone_cav,$Cuidados_cav,$Datavisi_cav,$Identificacao_cav){
	$banco=new Banco();
	$sql="insert into veterinario_cav values($CFMV,$Tosa_cav,'$Nomevet_cav',$Casqueamento_cav,'$Telefone_cav','$Cuidados_cav',$Datavisi_cav,$Identificacao_cav)";
		$resp=$banco->executar($sql);
		if (!$resp){
			return false;
		}else{
			return true;
		}
	}

function retornaUltimoVetCav(){
	$banco=new Banco();
	$sql="select max(Identificacao_cav) from veterinario_cav";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max(Identificacao_cav)'];
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
			return $codigo;
		}
	}

function listarVetCav($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="veterinario_cav"){
			$sql="select * from veterinario_cav order by CFMV";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by Tosa_cav";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by Nomevet_cav";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by Casqueamento_cav";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by Telefonevet_cav";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by  Cuidados_cav";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by Datavisi_cav";
		}else if($ordem==""){
			$sql="select * from veterinario_cav order by Identificacao_cav";

		
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}

function buscarVeterinarioCav($busca){
		$banco=new Banco();
		$sql="select * from veterinario_cav where CFMV='$busca' or Tosa_cav like '%$busca%' or Nomevet_cav='$busca' or Casqueamento_cav='$busca' or
		Telefonevet_cav='$busca' or Cuidados_cav='$busca' or Datavisi_cav '%$busca%' or dentificacao_cav like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}


?>	
