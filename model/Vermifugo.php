<?php
require_once './persistence/Banco.php'; 


function aplicarVermifugoVaca($ID_verm,$Nome_verm,$Marca_verm,$Lote_verm,$Fabricação_verm,$Validade_verm,$aplicacao_verm,$proximaapli_verm){ 
	$banco=new Banco();
	$sql="insert into vermifugo_vac values($ID_verm,'$Nome_verm','$Marca_verm','$Lote_verm','$Fabricação_verm','$Validade_verm','$aplicacao_verm','$proximaapli_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function aplicarVermifugoCavalo($ID_verm,$Nome_verm,$Marca_verm,$Lote_verm,$Fabricação_verm,$Validade_verm,$aplicacao_verm,$proximaapli_verm){ 
	$banco=new Banco();
	$sql="insert into vermifugo_cav values($ID_verm,'$Nome_verm','$Marca_verm','$Lote_verm','$Fabricação_verm','$Validade_verm','$aplicacao_verm','$proximaapli_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

function aplicarVermifugoOvelha($ID_verm,$Nome_verm,$Marca_verm,$Lote_verm,$Fabricação_verm,$Validade_verm,$aplicacao_verm,$proximaapli_verm){ 
	$banco=new Banco();
	$sql="insert into vermifugo_ovl values($ID_verm,'$Nome_verm','$Marca_verm','$Lote_verm','$Fabricação_verm','$Validade_verm','$aplicacao_verm','$proximaapli_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

 function verificarVermifugoVaca($vermifugo_vac){
	$banco=new Banco();
	$sql="select proximaapli_verm from  vermifugo_vac='$vermifugo_vac'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

//	ALERTA PARA VERMIFUGAÇÃO

function verificarVermifugoCavalo($vermifugo_cav){
	$banco=new Banco();
	$sql="select proximaapli_verm from  vermifugo_cav='$vermifugo_cav'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

function verificarVermifugoOvelha($vermifugo_ovl){
	$banco=new Banco();
	$sql="select proximaapli_verm from  vermifugo_ovl='$vermifugo_ovl'";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{
		return $consulta;
	}
} 

?>
