<?php
require_once './persistence/Banco.php'; 


function aplicarVermVaca($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$Identificacao_vac){ 
	$banco=new Banco();
	$sql="insert into vermifugo_vac(Id_verm,Nome_verm,Marca_verm,Lote_verm,Fabricacao_verm,Validade_verm,aplicacao_verm,Identificacao_vac) values($ID_verm,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm',$Identificacao_vac)";
	$resp=$banco->executar($sql);
	echo $sql;
	if($resp){
		return true;
	}else{
		return false;
	}
}


function aplicarVermCavalo($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$Identificacao_cav){ 
	$banco=new Banco();
	$sql="insert into vermifugo_cav(Id_verm,Nome_verm,Marca_verm,Lote_verm,Fabricacao_verm,Validade_verm,aplicacao_verm,Identificacao_cav) values ($ID_verm,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm',$Identificacao_cav)";
	$resp=$banco->executar($sql);
	echo $sql;
	if($resp){
		return true;
	}else{
		return false;
	}
}

function aplicarVermOvelha($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$id_ovl){ 
	$banco=new Banco();
	$sql="insert into vermifugo_ovl(Id_verm,Nome_verm,Marca_verm,Lote_verm,Fabricacao_verm,Validade_verm,aplicacao_verm,id_ovl) values($ID_verm,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm',$id_ovl)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

//CONTINUAR NUMERAÇÃO


function ultimoVermCavalo(){ 
	$banco=new Banco();
	$sql="select max(Id_verm) from vermifugo_cav";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(Id_verm)'];
	}
		if ($codigo==NULL) {
			$codigo=0;
		} 
			return $codigo;
		}
	}

function ultimoVermVaca(){ 
	$banco=new Banco();
	$sql="select max(Id_verm) from vermifugo_vac";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(Id_verm)'];
	}
		if ($codigo==NULL) {
			$codigo=0;
		} 
			return $codigo;
		}
	}

function ultimoVermOvelha(){ 
	$banco=new Banco();
	$sql="select max(Id_verm) from vermifugo_ovl";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(Id_verm)'];
	}
		if ($codigo==NULL) {
			$codigo=0;
		} 
			return $codigo;
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
