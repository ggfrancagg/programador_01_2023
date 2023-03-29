<?php
require_once './persistence/Banco.php'; 


function aplicarVermVaca($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proxima_verm,$Identificacao_vac){ 
	$banco=new Banco();
	$sql="insert into vermifugo_vac values($ID_vermifugo,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proxima_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function aplicarVermCavalo($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proxima_verm,$Identificacao_cav){ 
	$banco=new Banco();
	$sql="insert into vermifugo_cav values($ID_vermifugo,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proxima_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

function aplicarVermOvelha($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proxima_verm,$id_ovl){ 
	$banco=new Banco();
	$sql="insert into vermifugo_ovl values($ID_vermifugo,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proxima_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

//CONTINUAR NUMERAÇÃO


function ultimoVermCavalo($Id_verm){ 
	$banco=new Banco();
	$sql="select Id_verm from vermifugo_cav where Id_verm=$Id_verm";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

function ultimoVermVaca($Id_verm){ 
	$banco=new Banco();
	$sql="select Id_verm from vermifugo_vac where Id_verm=$Id_verm";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}
function ultimoVermOvelha($Id_verm){ 
	$banco=new Banco();
	$sql="select Id_verm from vermifugo_ovl where Id_verm=$Id_verm";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

//VERIFICAR DATA

 function verificarVermifugo($vermifugo){
	$banco=new Banco();
	$sql="select proxima_verm from  vermifugoproxima_verm='$vermifugo'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

?>
