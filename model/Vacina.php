<?php
require_once './persistence/Banco.php'; 


function vacinaVaca($IDvasc_vac,$Nomevasc_vac,$Tipovasc_vac,$Dataapli_vac,$proximaapli_vac,$Identificacao_vac){ 
	$banco=new Banco();
	$sql="insert into vacina_vac values($IDvasc_vac,'$Nomevasc_vac','$Tipovasc_vac','$Dataapli_vac','$proximaapli_vac',$Identificacao_vac)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function vacinaCavalo($IDvac_cav,$Dataapli_cav,$proximaapli_cav,$Tipovasc_cav,$Nomevasc_cav,$Identificacao_cav){ 
	$banco=new Banco();
	$sql="insert into vacina_cav values($IDvac_cav,'$Dataapli_cav','$proximaapli_cav','$Tipovasc_cav','$Nomevasc_cav',$Identificacao_cav)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

function vacinaOvelha($IDvasc_ovl,$Nomevasc_ovl,$Tipovasc_ovl,$Dataapli_ovl,$proximaapli_ovl,$id_ovl){
	$banco=new Banco();
	$sql="insert into vacina_ovl values($IDvasc_ovl,'$Nomevasc_ovl','$Tipovasc_ovl','$Dataapli_ovl','$proximaapli_ovl',$id_ovl)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


//GERAR CÓDIGO DE ID


function retornaUltimaVacCavalo(){ 
	$banco=new Banco();
	$sql="select max(IDvac_cav) from vacina_cav";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$codigo=$linha['max(IDvac_cav)'];
			}
			if($codigo==NULL){
				$codigo=0;
			}
			return $codigo;
		}
	}


function retornaUltimaVacVaca(){ 
	$banco=new Banco();
	$sql="select max(IDvasc_vac) from vacina_vac";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$codigo=$linha['max(IDvasc_vac)'];
			}
			if($codigo==NULL){
				$codigo=0;
			}
			return $codigo;
		}
	}

	function retornaUltimaVacOvelha(){ 
	$banco=new Banco();
	$sql="select max(IDvasc_ovl) from vacina_ovl";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$codigo=$linha['max(IDvasc_ovl)'];
			}
			if($codigo==NULL){
				$codigo=0;
			}
			return $codigo;
		}
	}


?>


</body>
</html>