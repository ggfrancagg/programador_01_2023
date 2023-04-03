<?php

require_once'./persistence/Banco.php';

function cadastrarConsultaOvl($ID_consulta,$id_ovl,$CFMV,$Datacolsu_ovl,$Horariocons_ovl,$prontuario_ovl){
	$banco=new Banco();
	$sql="insert into consultar_ovl values($ID_consulta,$id_ovl,'$CFMV','$Datacolsu_ovl','$Horariocons_ovl','$prontuario_ovl')";
<<<<<<< HEAD
=======
	echo "$sql";
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
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