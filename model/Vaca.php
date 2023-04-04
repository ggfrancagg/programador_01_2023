<?php
require_once './persistence/Banco.php';
	                                      
function cadastrarVaca($Identificacao_vac,$Nome_vac,$Raca_vac,$Peso_vac,$Datanasc_vac,$Racamae_vac,$Racapai_vac,$Altura_vac,$sexo_vac){
$banco=new Banco();
$sql="insert into vaca values($Identificacao_vac,'$Nome_vac','$Raca_vac',$Peso_vac,'$Datanasc_vac','$Racamae_vac','$Racapai_vac',$Altura_vac,'$sexo_vac')";
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

function verificarVacinaVaca($idvasc){
		$banco=new Banco();
		$sql="select vaca.Nome_vac from vaca inner join vacina_vac where vaca.Identificacao_vac=vacina_vac.Identificacao_vac and vacina_vac.Dataapli_vac='$idvasc'";
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}	

	function buscarBovino($busca){
		$banco=new Banco();
		$sql="select * from vaca where Identificacao_vac='$busca' or Nome_vac like '%$busca%' or Raca_vac='$busca' or Peso_vac='$busca' or
		Datanasc_vac='$busca' or Racamae_vac='$busca' or Racapai_vac like '%$busca%' or Altura_vac like '%$busca%' or sexo_vac like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

	function acharBovino($codigo){
		$banco=new Banco();
		$sql= "select * from vaca where Identificacao_vac=$codigo";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}
	
	function alterarBovino($Identificacao_vac,$Nome_vac,$Peso_vac,$Altura_vac){
		$banco=new Banco();
		$sql="update vaca set Nome_vac='$Nome_vac', Peso_vac=$Peso_vac, Altura_vac='$Altura_vac' where Identificacao_vac=$Identificacao_vac";
		$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}
	
 function removerBovino($id){
 	$banco=new Banco();
 	$sql="delete from vaca where Identificacao_vac=$id";
 	$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}
?>