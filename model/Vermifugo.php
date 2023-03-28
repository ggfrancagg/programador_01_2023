<?php
require_once './persistence/Banco.php'; 


function aplicarVermifugo($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proxima_verm){ 
	$banco=new Banco();
	$sql="insert into vermifugo values($ID_vermifugo,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proxima_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function aplicarVermifugo($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proxima_verm){ 
	$banco=new Banco();
	$sql="insert into vermifugo values($ID_vermifugo,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proxima_verm')";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


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
