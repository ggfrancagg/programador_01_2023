<?php
require_once './persistence/Banco.php';

function cadastrarVeterinario($id_vet,$nome_vet,$nasc_vet,$tel_vet,$data_visita,$cuidados_vet){
	$banco=new Banco();
	$sql="insert into veterinario values($id_vet,'$nome_vet','$nasc_vet','$tel_vet','$data_visita','$cuidados_vet')";
	$resposta=$banco->executar($sql);
	if(!$resposta){
		return false;
	}else{
		return true;
	}
}

function retornaUltimoVeterinario(){
	$banco=new Banco();
	$sql="select max(id_vet) from veterinario";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$codigo=$linha['max(id_vet)'];
		}
		if($codigo==null){
			$codigo=0;
	} return $codigo;

}

function listarVeterinario(){
	$banco=new Banco();
	$sql="select * from veterinario order by id_vet";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}
}
?>