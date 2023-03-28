<?php
//	id_vet	nome_vet nasc_vet tel_vet data_visita cuidados_vet
require_once 'cabecalho.php';
require_once './persistence/Banco.php';

function Veterinario(){
	$banco=new Banco();
	$sql="insert into veterinario_ovl values($id_vet,$nome_vet,$nasc_vet,$tel_vet,$data_visita,$cuidados_vet)";
		$resp=$banco->executar($sql);
		if (!$resp) {
			return false;
		}else{
			return true;
		}
	}

function retornaUltimoVet(){
	$banco=new Banco();
	$sql="select max(id_vet) from veterinario";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(id_vet)'];
	}
		if ($codigo==NULL) {
			$codigo=0;
		} 
			return $codigo;
		}
	}

function listarVet($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="id"){
			$sql="select * from veterinario_ovl order by id_vet";
		}else if($ordem=="nome"){
			$sql="select * from veterinario_ovl order by nome_vet";
		}else if($ordem=="nasc"){
			$sql="select * from veterinario_ovl order by nasc_vet";
		}else if($ordem=="tel"){
			$sql="select * from veterinario_ovl order by tel_vet";
		}else if($ordem=="data"){
			$sql="select * from veterinario_ovl order by data_visita";
		}else if($ordem=="cuidados"){
			$sql="select * from veterinario_ovl order by cuidados_vet";
		}
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}



?>	
