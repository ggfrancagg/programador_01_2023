<?php

require_once'./persistence/Banco.php';

function Veterinario($CFMV,$nome_vet,$nasc_vet,$tel_vet,$data_visita){
	$banco=new Banco();
<<<<<<< HEAD
	$sql="insert into veterinario_ovl values($CFMV,'$nome_vet','$nasc_vet','$tel_vet','$data_visita','$cuidados_vet')";
=======
	$sql="insert into veterinario_ovl values($CFMV,'$nome_vet',$nasc_vet,'$tel_vet',$data_visita)";
>>>>>>> 9b484585cda730f76cc1d0bc4f5283487c68e378
		$resp=$banco->executar($sql);
		if (!$resp){ //se ñ possuir resposta
			return false;
		}else{//caso ao contrario
			return true;
		}
	}

function retornaUltimoVet(){ //retornar o ultimo veterinario :D
	$banco=new Banco();
	$sql="select max(CFMV) from veterinario_ovl";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
<<<<<<< HEAD
		while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(CFMV)'];
=======
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max(id_vet)'];
>>>>>>> 9b484585cda730f76cc1d0bc4f5283487c68e378
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
		echo $codigo;
			return $codigo;
		}
	}

function listarVet($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="id"){
			$sql="select * from veterinario_ovl order by CFMW";
		}else if($ordem=="nome"){
			$sql="select * from veterinario_ovl order by nome_vet";
		}else if($ordem=="nasc"){
			$sql="select * from veterinario_ovl order by nasc_vet";
		}else if($ordem=="tel"){
			$sql="select * from veterinario_ovl order by tel_vet";
		}else if($ordem=="data"){
			$sql="select * from veterinario_ovl order by data_visita";
		}
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}



?>	
