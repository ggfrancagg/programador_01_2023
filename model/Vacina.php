<?php
require_once './persistence/Banco.php'; 


function vacinaVaca($IDvasc_vac,$Nomevasc_vac,$Tipovasc_vac,$Dataapli_vac,$proximaapli_vac){ 
	$banco=new Banco();
	$sql="insert into vaca values($IDvasc_vac,'$Nomevasc_vac','$Tipovasc_vac','$Dataapli_vac')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function vacinaCavalo($IDvac_cav,$Dataapli_cav,$proximaapli_cav,$Tipovasc_cav,$Nomevasc_cav){ 
	$banco=new Banco();
	$sql="insert into cavalo values($IDvac_cav,'$Dataapli_cav','$proximaali_cav','$Tipovasc_cav','$Nomevasc_cav')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

function vacinaOvelha($IDvasc_ovl,$Nomevasc_ovl,$Tipovasc_ovl,$Dataapli_ovl,$proximaapli_ovl){
	$banco=new Banco();
	$sql="insert into ovelha values($IDvasc_ovl,'$Nomevasc_ovl','$Tipovasc_ovl','$Dataapli_ovl','$proximaapli_ovl')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

//ALERTA DE DATA DA VACINA

function verificarVacinaVaca($vacina_vaca){
	$banco=new Banco();
	$sql="select vaca.nome_vac from vaca where proximaapli_vac='$vacina_vaca'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

function verificarVacinaCavalo($vacina_cavalo){
	$banco=new Banco();
	$sql="select cavalo.nome_cav from cavalo where proximaapli_cav='$vacina_cavalo'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

function verificarVacinaOvelha($vacina_ovelha){
	$banco=new Banco();
	$sql="select ovelha.nome_ovl from ovelha where proximaapli_ovl='$vacina_ovelha'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

?>
