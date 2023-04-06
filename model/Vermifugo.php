<?php
require_once './persistence/Banco.php'; 


function aplicarVermVaca($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proximaapli_verm,$Identificacao_vac){ 
	$banco=new Banco();
	$sql="insert into vermifugo_vac values($ID_verm,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proximaapli_verm',$Identificacao_vac)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function aplicarVermCavalo($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proximaapli_verm,$Identificacao_cav){ 
	$banco=new Banco();
	$sql="insert into vermifugo_cav values($ID_verm,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proximaapli_verm',$Identificacao_cav)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

function aplicarVermOvelha($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proximaapli_verm,$id_ovl){ 
	$banco=new Banco();
	$sql="insert into vermifugo_ovl values($ID_verm,'$nome_verm','$marca_verm','$lote_verm','$fabricacao_verm','$validade_verm','$aplicacao_verm','$proximaapli_verm',$id_ovl)";
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


function buscarVermifugoVac($busca){
		$banco=new Banco();
		$sql="select * from vermifugo_vac where Id_verm='$busca' or Nome_verm like '%$busca%' or Lote_verm='$busca' or Fabricacao_verm='$busca' or
		Validade_verm='$busca' or aplicacao_verm='$busca' or proximaapli_verm='$busca' or Identificacao_vac='$busca'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

	function buscarVermifugoCav($busca){
		$banco=new Banco();
		$sql="select * from vermifugo_cav where Id_verm='$busca' or Nome_verm like '%$busca%' or Lote_verm='$busca' or Fabricacao_verm='$busca' or
		Validade_verm='$busca' or aplicacao_verm='$busca' or proximaapli_verm='$busca' or Identificacao_cav='$busca'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

	function buscarVermifugoOvl($busca){
		$banco=new Banco();
		$sql="select * from vermifugo_ovl where Id_verm='$busca' or Nome_verm like '%$busca%' or Lote_verm='$busca' or Fabricacao_verm='$busca' or
		Validade_verm='$busca' or aplicacao_verm='$busca' or proximaapli_verm='$busca' or id_ovl='$busca'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}


function listarVermifugoBovinos(){
	 $banco=new Banco();
     $sql="select * from vermifugo_vac order by Identificacao_vac";
     $consulta=$banco->consultar($sql);
     if(!$consulta){
        return false;
     }else{
        return $consulta;
     }
}

function listarVermifugoEquinos(){
	 $banco=new Banco();
     $sql="select * from vermifugo_cav order by  Identificacao_cav";
     $consulta=$banco->consultar($sql);
     if(!$consulta){
        return false;
     }else{
        return $consulta;
     }
}

function listarVermifugoOvinos(){
	 $banco=new Banco();
     $sql="select * from vermifugo_ovl order by id_ovl";
     $consulta=$banco->consultar($sql);
     if(!$consulta){
        return false;
     }else{
        return $consulta;
     }
}


function alterarVermifugoVac($Id_verm,$Nome_verm,$Marca_verm,$Lote_verm,$Fabricacao_verm,$Validade_verm,$aplicacao_verm,$proximaapli_verm,$Identificacao_vac){
		$banco=new Banco();
		$sql="update vermifugo_vac set Nome_verm='$Nome_verm', Marca_verm='$Marca_verm', Lote_verm='$Lote_verm', Fabricacao_verm='$Fabricacao_verm', Validade_verm='$Validade_verm', aplicacao_verm='$aplicacao_verm', proximaapli_verm='$proximaapli_verm' where Id_verm=$Id_verm";
		$resposta=$banco->executar($sql);
		if(!$resposta){
			return false;
		}else{
			return true;
		}
	}
function alterarVermifugoCav($Id_verm,$Nome_verm,$Marca_verm,$Lote_verm,$Fabricacao_verm,$Validade_verm,$aplicacao_verm,$proximaapli_verm,$Identificacao_cav){
		$banco=new Banco();
		$sql="update vermifugo_cav set Nome_verm='$Nome_verm', Marca_verm='$Marca_verm', Lote_verm='$Lote_verm', Fabricacao_verm='$Fabricacao_verm', Validade_verm='$Validade_verm', aplicacao_verm='$aplicacao_verm', proximaapli_verm='$proximaapli_verm' where Id_verm=$Id_verm";
		$resposta=$banco->executar($sql);
		if(!$resposta){
			return false;
		}else{
			return true;
		}
	}


	function alterarVermifugoOvl($Id_verm,$Nome_verm,$Marca_verm,$Lote_verm,$Fabricacao_verm,$Validade_verm,$aplicacao_verm,$proximaapli_verm,$Id_ovl){
		$banco=new Banco();
		$sql="update vermifugo_ovl set Nome_verm='$Nome_verm', Marca_verm='$Marca_verm', Lote_verm='$Lote_verm', Fabricacao_verm='$Fabricacao_verm', Validade_verm='$Validade_verm', aplicacao_verm='$aplicacao_verm', proximaapli_verm='$proximaapli_verm' where Id_verm=$Id_verm";
		$resposta=$banco->executar($sql);
		if(!$resposta){
			return false;
		}else{
			return true;
		}
	}



function acharVermBovino($codigo){
		$banco=new Banco();
		$sql= "select * from vermifugo_vac where Id_verm=$codigo";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}


	function acharVermEquino($codigo){
		$banco=new Banco();
		$sql= "select * from vermifugo_cav where Id_verm=$codigo";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}


	function acharVermOvino($codigo){
		$banco=new Banco();
		$sql= "select * from vermifugo_ovl where Id_verm=$codigo";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

	function removerVermCav($id){
 	$banco=new Banco();
 	$sql="delete from vermifugo_cav where Id_verm=$id";
 	$resposta=$banco->executar($sql);

		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}




	function removerVermVac($id){
 	$banco=new Banco();
 	$sql="delete from vermifugo_vac where Id_verm=$id";
 	$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}


	function removerVermOvl($id){
 	$banco=new Banco();
 	$sql="delete from vermifugo_ovl where Id_verm=$id";
 	$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}

?>
