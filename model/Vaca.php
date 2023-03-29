<?php
require_once './persistence/Banco.php';
	                                      
function cadastrarVaca($Identificacao_vac,$Nome_vac,$Raca_vac,$Peso_vac,$Datanasc_vac,$Racamae_vac,$Racapai_vac,$Altura_vac,$sexo_vac){
$banco=new Banco();
$sql="insert into vaca values($Identificacao_vac,'$Nome_vac',$Raca_vac,$Peso_vac,'$Datanasc_vac',$Racamae_vac,$Racapai_vac,$Altura_vac,$sexo_vac)";
		$resp=$banco->executar($sql);
		if (!$resp) {
			return false;
		}else{
			return true;
		}
	}

function retornaUltimaVaca(){
	$banco=new Banco();
	$sql="select max(Identificacao_vac) from vaca";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(Identificacao_vac)'];
	}
		if ($codigo==NULL) {
			$codigo=0;
		} 
			return $codigo;
		}
	}

//teste
function listarVaca(){
	$banco=new Banco();
	$sql="select * from vaca order by Identificacao_vac";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}
function verificarVacina($idvasc){
		$banco=new Banco();
		$sql="select Nome_vac from vaca where IDvasc_vac in(select IDvasc_vac from vacina_vac where Dataapli_vac=$idvasc)";
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}	


?>	