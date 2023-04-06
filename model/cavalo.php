<?php

require_once './persistence/Banco.php';

function cadastrarCavalo($Identificacao_cav,$Nome_cav,$Raca_cav,$Datanasc_cav,$Sexo_cav,$Peso,$Racapai_cav,$Altura_cav,$Racamae_cav){
	$banco=new banco();
	$sql="insert into cavalo values($Identificacao_cav,'$Nome_cav','$Raca_cav','$Datanasc_cav','$Sexo_cav',$Peso,'$Racapai_cav',$Altura_cav,'$Racamae_cav')";
	$resposta=$banco->executar($sql);

	if($resposta){
		return true;
}else{
	return false;
	}
				}


function listarCavalo(){
	$banco=new banco();
	$sql="select * from cavalo order by Identificacao_cav";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}

function retornaUltimoCodigo(){
	$banco=new banco();
	$sql="select max(Identificacao_cav) from cavalo";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$ultimo=$linha['max(Identificacao_cav)'];
		}
		if ($ultimo==null) {
			$ultimo=0;
		}
	return $ultimo;

		}
}

function verificarVacinaCavalo($idvasc){
		$banco=new Banco();
		$sql="select cavalo.Nome_cav from cavalo inner join vacina_cav where cavalo.Identificacao_cav=vacina_cav.Identificacao_cav and vacina_cav.Dataapli_cav='$idvasc'";
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}	

	
function buscarCavalo($busca){
		$banco=new Banco();
		$sql="select * from cavalo where Identificacao_cav='$busca' or Nome_cav like '%$busca%' or Raca_cav='$busca' or	Datanasc_cav='$busca' or Sexo_cav='$busca' or Peso like '%$busca%' or Racapai_cav like '%$busca%' or Altura_cav like '%$busca%' or Racamae_cav like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

	function acharEquino($codigo){
		$banco=new Banco();
		$sql= "select * from cavalo where Identificacao_cav=$codigo";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}
	
	function alterarEquino($Identificacao_cav,$Nome_cav,$Peso,$Altura_cav){
		$banco=new Banco();
		$sql="update cavalo set Nome_cav='$Nome_cav', Peso='$Peso', Altura_cav='$Altura_cav' where Identificacao_cav=$Identificacao_cav";
		$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}

	function removerEquino($id){
 	$banco=new Banco();
 	$sql="delete from cavalo where Identificacao_cav=$id";
 	$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}

?>
</body>
</html>